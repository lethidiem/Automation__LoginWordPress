<?php
use Step\Acceptance\First as LI_06Step;

class LI_06Cest
{
    /**
     * @param LI_06Step $I
     * check if a user cannot click  Email Address or Username feild
     */
    public function checkLI_06(LI_06Step  $I)
    {
        $I->LI_06();
    }

}