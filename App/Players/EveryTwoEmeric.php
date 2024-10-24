<?php


namespace GameTheory\Players;

class EveryTwoEmeric extends Base
{


    public function __construct()
    {
        $this->setName('EveryTwo Emeric');
        $this->avatar = '9c09e9ccfab8cb6d2c';
    }


    public function getStrategy($round){

        if($round %3 == 0){
            return 'd';
        }else {
            return 'a';
        }

    }


}