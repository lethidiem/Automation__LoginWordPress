<?php
use Step\Acceptance\First as LI_14Step;

class LI_14Cest
{
    /**
     * @param LI_14Step $I
     * if a user enter new password after change password successfully
     */
    public function checkLI_14(LI_14Step $I)
    {
        $I->LI_14('thidiem257@gmail.com','diemle30071998');
    }

}