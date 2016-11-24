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

/*---------*/
/*  /faq/  */
/*---------*/
describe('FAQ', function() {

    var faqpage = DEVSERVER + 'faq/';

    it('should expand a section when clicked', function() {
        browser.get(faqpage);
        // the selectors will work on the first element pair
        element(by.css('li.collapsible-header')).click();
        browser.sleep(200);
        expect(
            element(by.css('li.collapsible-body')).isDisplayed()
        ).toBeTruthy();
    });

});
