// Protractor configuration - conf.js
exports.config = {
	framework: 'jasmine',
    seleniumAddress: 'http://localhost:4444/wd/hub',
    specs: [
    	'test/protractorSpec.js'
    ]
}