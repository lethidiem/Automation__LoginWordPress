<?php
use Step\Acceptance\First as LI_08Step;

class LI_08Cest
{
    /**
     * @param LI_08Step $I
     * check if user enter incorrect password
     */
    public function CheckLI_08(LI_08Step $I)
    {
        $I->LI_08('thidiem257@gmail.com','diemle');
    }

}