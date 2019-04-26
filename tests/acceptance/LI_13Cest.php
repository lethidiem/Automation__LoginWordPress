<?php
use Step\Acceptance\First as LI_13Step;

class LI_13Cest
{
    /**
     * @param LI_13Step $I
     * check  if a user enter old password after change password successfully
     */
    public function checkLI_13(LI_13Step $I)
    {
        $I->LI_13('thidiem257@gmail.com','30071998');
    }
}