#!/usr/bin/env python
# -*- coding: utf-8 -*-
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4

from fabric.api import *
from fabric.contrib.console import confirm

import os, sys

# .dotenv
from os.path import join, dirname
from dotenv import load_dotenv

# load environment variables from .env file
dotenv_path = join(dirname(__file__), '.env')
load_dotenv(dotenv_path)

env.hosts = [ os.environ.get("host_deploy") ]
env.user = 'root'


remotedir = '/var/www/html/gfbio'
localdir = "wordpress"
tarfilename = "gfbio.tar.gz"


@task
def local_cleanup():
    local("rm -rf " + tarfilename)

@task
def deploy():
    print "========================================"
    print "deploying to server" + os.environ.get("host_deploy")
    print "========================================"

    try:


        # cleanup
        local_cleanup()

        # compress
        local("tar -zcvf %s %s" % (tarfilename, localdir))

        # upload
        put(tarfilename, join(remotedir, tarfilename), use_sudo=True, mirror_local_mode=True)

        with cd(remotedir):

            # untar
            sudo("tar -xvf " + tarfilename)

            # modify perms # TODO: check if this is necessary
            # sudo("chmod 755 " + remoteplugindir)

    finally:

        # cleanup
        # local_cleanup()

        # remote cleanup
        # with cd(remotedir):
        sudo("rm -rf " + join(remotedir, tarfilename))


if __name__ == "__main__":
    deploy()

