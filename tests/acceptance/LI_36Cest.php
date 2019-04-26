<?php
use Step\Acceptance\First as LI_36Step;

class LI_36Cest
{
    /**
     * @param LI_36Step $I
     * if the data in password field is either visible as asterisk
     */
    public function checkLI_36(LI_36Step $I)
    {
        $I->LI_36('thidiem257@gmail.com','diemle30071998');
    }

}