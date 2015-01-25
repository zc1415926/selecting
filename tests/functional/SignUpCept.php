<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Selecting account');

$I->amOnPage('/');
$I->click('注册新用户');
$I->seeCurrentUrlEquals('/register');

$I->fillField('username', 'zc1415926');
$I->fillField('showname', '12212121');
$I->click('完成注册');

$I->seeCurrentUrlEquals('');
//$I->see('欢迎欢迎,热烈欢迎！');
$I->seeRecord('users', [
    'username' => 'zc1415926'
]);

$I->assertTrue(Auth::check(), 'I have logged in!');