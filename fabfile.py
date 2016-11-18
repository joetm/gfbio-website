#!/usr/bin/env python
# -*- coding: utf-8 -*-
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4

from fabric.api import *
from fabric.contrib.console import confirm

import os, sys
import re

# .dotenv
from os.path import join, dirname
from dotenv import load_dotenv

# load environment variables from .env file
dotenv_path = join(dirname(__file__), '.env')
load_dotenv(dotenv_path)


remotedir = '/var/www/html/gfbio'
localdir = "wordpress"
tarFilename = "deploy/gfbio.tar.gz"
dbDumpFilename = "deploy/gfbio.sql"

# credentials are stored in .env file
env.user = 'root'
env.hosts = [ os.environ.get("host_deploy") ]

# local db
localdbName = "wordpress"
localdbUsername = "wordpress"
localdbPassword = "wordpress"

# remote db
dbName = os.environ.get("db")
dbUsername = os.environ.get("db_username")
dbPassword = os.environ.get("db_password")
dbRootUser = os.environ.get("db_rootuser")
dbRootPass = os.environ.get("db_rootpass")


@task
def local_cleanup():
    local("rm -f " + tarFilename)
    local("rm -f " + dbDumpFilename)
    local("rm -f " + join("deploy", "wp-config.php"))

@task
def deploy():
    print "========================================"
    print "deploying to server" + os.environ.get("host_deploy")
    print "========================================"

    try:

        # cleanup
        local_cleanup()

        # compress the folder
        local("tar -zcvf %s %s" % (tarFilename, localdir))

        # upload the folder
        put(tarFilename, join(remotedir, tarFilename), use_sudo=True, mirror_local_mode=True)

        # get a mysql dump from the vagrant VM
        local("mysqldump -h 192.168.33.10 -u%s -p\"%s\" %s > ./%s" % (localdbUsername, localdbPassword, localdbName, dbDumpFilename))

        # transfer the db dump to the remote host
        put(dbDumpFilename, join(remotedir, dbDumpFilename), use_sudo=True, mirror_local_mode=True)

        with cd(remotedir):

            # untar the folder
            sudo("tar -xvf " + tarFilename)

            # modify perms # TODO: check if this is necessary
            # sudo("chmod 755 " + remotedir)

            # drop the database
            # sudo("mysqladmin -f -u%s -p\"%s\" drop %s" % (dbUsername, dbPassword, dbName))

            # import the database
            sudo("mysql -u%s -p\"%s\" %s < %s" % (dbRootUser, dbRootPass, dbName, join(remotedir, dbDumpFilename)))


        # wordpress configuration
        deployConfigFile = join("deploy", "wp-config.php")
        # copy wp-config.php to deployment folder
        local("cp %s %s" % (join("wordpress", "wp-config.php"), deployConfigFile))
        # rewrite the db info in wp-config.php
        local("sed -i \"s/'DB_NAME', 'wordpress'/'DB_NAME\','%s'/\" %s" % (dbName, deployConfigFile))
        local("sed -i \"s/'DB_USER', 'wordpress'/'DB_USER\','%s'/\" %s" % (dbUsername, deployConfigFile))
        local("sed -i \"s/'DB_PASSWORD', 'wordpress'/'DB_PASSWORD','%s'/\" %s" % (re.escape(dbPassword), deployConfigFile))
        # transfer the wp-config.php to the remote server
        # sudo("rm -f %s", join(remotedir, "wordpress", "wp-config.php"))
        put(deployConfigFile, join(remotedir, "wordpress", "wp-config.php"), use_sudo=True, mirror_local_mode=True)

    finally:

        # cleanup
        # local_cleanup()

        # remote cleanup

        # remove the tar file and sql file
        sudo("rm -f " + join(remotedir, "deploy/*.*"))


if __name__ == "__main__":
    deploy()

