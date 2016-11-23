/*global browser, describe, element, by, toEqual, it, expect*/

// http://angular.github.io/protractor/#/tutorial

// ignore waiting for missing angular variable
browser.ignoreSynchronization = true;

const DEVSERVER = 'http://vccw.dev/';


/*---------*/
/*    /    */
/*---------*/
describe('Homepage', function() {

    it('should have a title', function() {
        browser.get(DEVSERVER);
        expect(browser.getTitle()).toEqual('Welcome to the GfBio Terminology Service');
    });

    it('should show the scrolling navigation button when one of the cards is clicked', function() {
        browser.get(DEVSERVER);
        // console.log(element(by.css('.card')));
        element(by.css('.card')).click();
        browser.sleep(1000);
        expect(
            element(by.css('.navbtn.up')).isDisplayed()
		).toBeTruthy();
    });

});
