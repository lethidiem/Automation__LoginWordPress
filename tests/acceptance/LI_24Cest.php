<?php
use Step\Acceptance\First as LI_24Step;

class LI_24Cest
{
    /**
     * @param LI_24Step $I
     * @throws Exception if a user able to open page in new tab after login successful
     */
    public function checkLI_24(LI_24Step $I)
    {
        $I->LI_24('thidiem257@gmail.com','diemle30071998');
    }

}