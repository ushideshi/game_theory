<?php


namespace GameTheory\Players;


use GameTheory\GameController;

class DefferingDan extends Base
{
    private $trigger = false;

    public function __construct()
    {
        $this->setName('Deffering Dan');
        $this->avatar = 'fe309ae3ba12a1402c';
    }

    public function getStrategy($round){

        return 'd';

    }

    private function setTrigger(){
        $this->trigger == true;
    }

    public function set_strategy() {



    }


}