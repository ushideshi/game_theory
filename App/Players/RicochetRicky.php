<?php


namespace GameTheory\Players;


use GameTheory\GameController;

class RicochetRicky extends Base
{


    public function __construct()
    {
        $this->setName('Ricochet Ricky');
        $this->avatar = '82e39bc5a679fcc2fb';
    }

    public function getStrategy($round){

        if($this->getID() == 1) {
            $prev = GameController::$previous2;
        }else {
            $prev = GameController::$previous1;
        }
        if($prev == 'd'){
            return 'd';
        } else {
            return 'a';
        }

    }




}