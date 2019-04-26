<?php
namespace Step\Acceptance;
use Page\Acceptance\First as FirstPage;
class First extends \AcceptanceTester
{
    /**
     * check Username filed exist onn login page
     */
    public function checkUserNameExist()
    {
        $I=$this;
        $I->wantToTest('Go to login page');
        $I->amOnPage(FirstPage::$URL);
        $I->wantToTest('I want to check user name exist');//cho biet minh dang o buoc nao
        $I->waitForElementVisible(FirstPage::$username,'3');//ton tai nhug hien len
        //$I->waitForElement(FirstPage::$username,'3');//kt co ton tai ko
        //$I->waitForElementNotVisible();//ton tai nhưng ko hien
    }

    /**
     * @throws \Exception
     * check if user enter valid and correct password
     */
    public function LI_01($username, $password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('Followed Sites', 30);
        $I->comment('Login success');

    }

    /**
     * @param $username
     * @throws \Exception check if user enter invalid email
     */
    public function LI_02($username)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'30');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForText('not exist.','30');
        $I->comment('Enter invalid email');
    }

    public function LI_03()
    {

    }

    /**
     * @param $username
     * @throws \Exception check if user enter email not register
     */
    public function LI_05($username)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'30');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForText('User does not exist.','30');
        $I->comment('email not register ');
    }

    /**
     * @throws \Exception check if a user cannot click  Email Address or Username feild
     */
    public function LI_06()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$continue,'30');
        $I->click(FirstPage::$continue);
        $I->waitForText('address','30');
        $I->comment('not enter email');
    }

    /**
     * @throws \Exception check if a user click Email Address or Username feild  but not enter characters
     */
    public function LI_07()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'30');
        $I->click(FirstPage::$usernameFeild);
        $I->click(FirstPage::$continue);
        $I->waitForText('address','30');
        $I->comment('not enter email');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception check if user enter incorrect password
     */
    public function LI_08($username, $password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('not the right password', 30);
        $I->comment('enter correct password');
    }

    /**
     * @param $username
     * @throws \Exception check if user cannot click password
     */
    public function LI_09($username)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$login,'10');
        $I->click(FirstPage::$login);
        $I->waitForText('forget to enter', 30);
        $I->comment('forget enter password');
    }

    /**
     * @param $username
     * @throws \Exception check if a user click password feild but not enter password
     */
    public function LI_10($username)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->click(FirstPage::$passwordField);
        $I->click(FirstPage::$login);
        $I->waitForText('forget to enter', 30);
        $I->comment('forget enter password');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception check  if a user enter old password after change password successfully
     */
    public function LI_13($username,$password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('not the right password', 30);
        $I->comment('inCorrect password');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception check if a user enter new password after change password successfully
     */
    public function LI_14($username,$password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('Followed Sites', 30);
        $I->comment('Login success');
    }

    /**
     * check if a user will be able to press Tab key
     */
    public function LI_15()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        //$I->waitForElementVisible(FirstPage::$usernameFeild);
        $I->pressKey(FirstPage::$usernameFeild, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$text1,\Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$continue,\Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$btnContinueGoogle,\Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$text2,\Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$text3,\Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(FirstPage::$text4,\Facebook\WebDriver\WebDriverKeys::TAB);
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception check if a user be able to press enter key instead of use mouse
     */
    public function LI_16($username,$password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->pressKey(FirstPage::$usernameFeild,\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->pressKey(FirstPage::$login,\Facebook\WebDriver\WebDriverKeys::ENTER);
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception if a user press F5 key
     * chưa làm xong
     */
    public function LI_17($username,$password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->pressKey(FirstPage::$f5,\Facebook\WebDriver\WebDriverKeys::F5);
    }

    /**
     * @param $username
     * @param $password1
     * @param $password2
     * @param $password3
     * @param $password4
     * @param $password5
     * @throws \Exception Verify that there is a limit on the total number of unsuccessful login attempts
     * chưa fix xong
     */
    public function LI_18($username,$password1,$password2,$password3,$password4,$password5)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password1);
        $I->click(FirstPage::$login);
        //$I->wait(3);
        $I->clearField(FirstPage::$passwordField);

        $I->fillField(FirstPage::$passwordField,$password2);
        $I->click(FirstPage::$login);
        $I->clearField(FirstPage::$passwordField);

        $I->fillField(FirstPage::$passwordField,$password3);
        $I->click(FirstPage::$login);
        $I->clearField(FirstPage::$passwordField);

        $I->fillField(FirstPage::$passwordField,$password4);
        $I->click(FirstPage::$login);
        $I->clearField(FirstPage::$passwordField);

        $I->fillField(FirstPage::$passwordField,$password5);
        $I->click(FirstPage::$login);
        $I->clearField(FirstPage::$passwordField);

        $I->waitForText('login limit', 30);
        $I->comment('inCorrect password');

    }

    /**
     * @throws \Exception
     * check  if a user click Sign Up
     */
    public function LI_21()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text5);
        $I->waitForText('get started.', 30);
        $I->comment('go to page');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception  if a user able to open page in new tab after login successful
     */
    public function LI_24($username,$password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('Followed Sites', 30);
        $I->comment('Login success');

        $I->openNewTab();
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
    }

    /**
     * @throws \Exception
     * if a user click on hyperlink Terms of Service
     */
    public function LI_30()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text1);
        $I->waitForText('Terms of Service', 30);
        $I->comment('goto page');
    }

    /**
     * @throws \Exception
     * if a user click hyperlink Create a new account
     */
    public function LI_31()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text2);
        $I->waitForText('get started.', 30);
        $I->comment('go to page');
    }

    /**
     * @throws \Exception
     *  if a user click hyperlink Email me a login link
     */
    public function LI_32()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text3);
        $I->waitForText('Email me a login link.', 30);
        $I->comment('go to page');
    }

    /**
     * @throws \Exception
     * if a user click hyperlink Lost your password
     */
    public function LI_33()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text4);
        $I->waitForText('Lost Password', 30);
        $I->comment('go to page');
    }

    /**
     * @throws \Exception
     * if a user click hyperlink Back to WordPress.com
     */
    public function LI_34()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$text6);
        $I->waitForText('Log In', 30);
        $I->comment('go to page');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception if a user will be able to search url login /log-in after successful login
     */
    public function LI_35($username, $password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$login);
        $I->waitForText('Followed Sites', 30);
        $I->comment('Login success');
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForText('Log in to your account.', 30);
        $I->comment('goto Login ');
    }

    /**
     * @param $username
     * @param $password
     * @throws \Exception if the data in password field is either visible as asterisk
     */
    public function LI_36($username, $password)
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$usernameFeild,'10');
        $I->fillField(FirstPage::$usernameFeild,$username);
        $I->click(FirstPage::$continue);
        $I->waitForElementVisible(FirstPage::$passwordField,'10');
        $I->fillField(FirstPage::$passwordField,$password);
        $I->click(FirstPage::$eyepass);
    }
}