<?php
use Step\Acceptance\First as LI_05Step;

class LI_05Cest
{
    /**
     * @param LI_05Step $I
     * check if user enter email not register
     */
    public function checkLI_05(LI_05Step $I)
    {
        $I->LI_05('lethidiem257@gmail.com');
    }

}