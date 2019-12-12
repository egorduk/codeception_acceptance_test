<?php

use \Codeception\Scenario;
use \Codeception\Util\Locator;
use \Facebook\WebDriver\WebDriverKeys;

class InslyComSiteCest
{
    const SITE_URL = 'https://insly.com/en/';

    public function verifySiteTitle(Scenario $scenario)
    {
        $I = new WebBrowser($scenario);
        $I->amOnPage('/');
        $I->fillField(['name' => 'q'], 'insly.com');
        $I->pressKey(['name' => 'q'], WebDriverKeys::ENTER);
        $I->seeLink('', self::SITE_URL);
        $I->click(Locator::find('a', ['href' => self::SITE_URL]));
        $I->seeInTitle('MGA software, insurance software for brokers and agents.');
    }
}
