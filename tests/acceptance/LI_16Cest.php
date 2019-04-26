<?php
use Step\Acceptance\First as LI_16Step;

class LI_16Cest
{
    /**
     * @param LI_16Step $I
     * check if a user be able to press enter key instead of use mouse
     */
    public function checkLI_16(LI_16Step $I)
    {
        $I->LI_16('thidiem257@gmail.com','diemle30071998');
    }
}