<?php
use Step\Acceptance\First as LI_09Step;

class LI_09Cest
{
    /**
     * @param LI_09Step $I
     * check if user cannot click password
     */
    public function CheckLI_09(LI_09Step $I)
    {
        $I->LI_09('thidiem257@gmail.com');
    }

}