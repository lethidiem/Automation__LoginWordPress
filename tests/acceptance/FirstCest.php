<?php 
use Step\Acceptance\First as firstStep;
class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param firstStep $I
     * check user name exist on login page
     */
    public function checkUserNameExist(firstStep $I)
    {
        $I->checkUserNameExist();
    }
}
