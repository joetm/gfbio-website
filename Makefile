.PHONY: deploy

webpack:
	node node_modules/webpack/bin/webpack.js --config webpack.config.js

webpack-watch:
	node node_modules/webpack/bin/webpack.js --config webpack.config.js -w

webpack-hot:
	# @echo "Do not forget to create a file HOT_CODE_RELOAD in envdir"
	node node_modules/webpack-dev-server/bin/webpack-dev-server.js --hot --inline

# webpack-prod:
# 	node node_modules/webpack/bin/webpack.js --config webpack.config.prod.js

# deploy:
# 	cd deploy && ansible-playbook site.yml -i hosts -t deploy
