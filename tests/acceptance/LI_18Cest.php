<?php
use Step\Acceptance\First as LI_18Step;

class LI_18Cest
{
    /**
     * @param LI_18Step $I
     * @throws Exception Verify that there is a limit on the total number of unsuccessful login attempts
     */
    public function checkLI_18(LI_18Step $I)
    {
        $I->LI_18('thidiem257@gmail.com','diem','le','hi','123','dle');
    }
}