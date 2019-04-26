<?php
use Step\Acceptance\First as LI_07Step;

class LI_07Cest
{
    /**
     * @param LI_07Step $I
     * check if a user click Email Address or Username feild  but not enter characters
     */
    public function checkLI_07(LI_07Step $I)
    {
        $I->LI_07();
    }

}