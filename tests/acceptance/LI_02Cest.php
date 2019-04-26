<?php
use Step\Acceptance\First as LI_02Step;

class LI_02Cest
{
    /**
     * @param LI_02Step $I
     * check if user enter invalid email
     */
    public function CheckLI_02(LI_02Step $I)
    {
        $I->LI_02('thidiem  257gmail.com');
    }
}