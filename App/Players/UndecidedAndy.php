<?php


namespace GameTheory\Players;


use GameTheory\GameController;

class UndecidedAndy extends Base
{


    public function __construct()
    {
        $this->setName('Undecided Andy');
        $this->avatar = 'da987ea86a4a6ed0a8';
    }


    public function getStrategy($round){

        if($round %2 == 0){
            return 'a';
        }else {
            return 'd';
        }

    }


}