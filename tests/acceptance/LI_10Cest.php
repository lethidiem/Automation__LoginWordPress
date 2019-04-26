<?php
use Step\Acceptance\First as LI_10Step;

class LI_10Cest
{
    /**
     * @param LI_10Step $I
     * check if a user click password feild but not enter password
     */
    public function checkLI_10(LI_10Step $I)
    {
        $I->LI_10('thidiem257@gmail.com');
    }

}