<?php
use Step\Acceptance\First as LI_01Step;

class LI_01Cest
{
    /**
     * @param LI_01Step $
     * check if user enter valid and correct password
     */
    public function checkLI_01(LI_01Step $I)
    {
        $I->LI_01('thidiem257@gmail.com','diemle30071998');
    }
}