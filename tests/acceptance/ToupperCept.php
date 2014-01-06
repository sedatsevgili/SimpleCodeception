<?php
$I = new WebGuy($scenario);
$I->wantTo('ensure Toupper form works');
$I->amOnPage('toupper.html');
$I->see('Convert Me!');
$I->fillField('string', "Convert me to upper");
$I->click('Convert');
$I->amOnPage('toupper.php');
$I->see('To Upper!');
$I->click('Back to form');
$I->see('Convert Me!');
$I->fillField('string', '');
$I->click('Convert');
$I->amOnPage('toupper.php');
$I->see('No string entered');