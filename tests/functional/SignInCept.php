<?php 
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('login to my Larabook account');;

$I->amOnPage('/');
$I->fillField('quick_username', 'administrator');
$I->fillField('quick_password', 'administrator');
$I->click('登 录');

$I->seeInCurrentUrl('/profile');