<?php


namespace GameTheory\Players;


use GameTheory\GameController;

class NeverForget extends Base
{
    private $trigger = false;

    public function __construct()
    {
        $this->setName('Unforgiving Uma');
        $this->avatar = '6df1db44b7e039d41c';
    }


    public function getStrategy($round){
        if($round == 0){
            $this->unsetTrigger();
            return 'a';
        }
        if($this->getTrigger() == true) {
            return 'd';
        }else {
            if($this->getID() == 1) {
                $prev = GameController::$previous2;
            }else {
                $prev = GameController::$previous1;
            }
            if($prev == 'd'){
                $this->setTrigger();
                return 'd';
            } else {
                return 'a';
            }
        }
    }

    private function getTrigger(){
        return $this->trigger;
    }
    private function setTrigger(){
        $this->trigger = true;
    }

    private function unsetTrigger(){
        $this->trigger = false;
    }


}