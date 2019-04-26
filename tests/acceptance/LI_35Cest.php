<?php
use Step\Acceptance\First as LI_35Step;

class LI_35Cest
{
    /**
     * @param LI_35Step $I
     *  if a user will be able to search url login /log-in after successful login
     */
    public function checkLI_35(LI_35Step $I)
    {
        $I->LI_35('thidiem257@gmail.com','diemle30071998');
    }

}