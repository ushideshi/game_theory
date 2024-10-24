<?php

namespace GameTheory\Players;

class Base
{
    public $choices;
    public $name;
    public $strategy;
    public $score = [];
    public $games;
    public $playerID;
    public $history = [];
    public $avatar;



    public function __construct(){
        $this->games = 0;
        $this->choices = [
            'c' => 'cooperate',
            'd' => 'defect',
        ];
        $this->avatar = '5562a89623546b4083';
        $this->setStrategy();
        $this->setName('Friendly Joe');
    }

    public function getAvatar(){
        return $this->avatar;
    }
    public function setID($id){
        $this->playerID = $id;
    }

    public function getID(){
        return $this->playerID;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function adjustScore($score,$enemy){
        if(empty($this->score[$enemy->name])){
            $this->score[$enemy->name] = 0;
        }
        $this->score[$enemy->name] += $score;
    }

    public function getScore(){
        $score = 0;
        foreach ($this->score as $s){
            $score += $s;
        }
        return $score;
    }

    public function getStrategy($round){

        return $this->strategy[$round];
    }

    public function setStrategy() {
        for($r=0; $r <= config('rounds'); $r++ ){
            if($r == 3){
                $this->strategy[$r] = 'a';
            }else{

                $this->strategy[$r] = 'a';
            }
        }
    }

    public function setHistory($enemy,$round,$choices) {

        if(empty($this->history[$enemy->name])){
            $this->history[$enemy->name] = [];
        }
        if(empty($this->history[$enemy->name][$round])){
            $this->history[$enemy->name][$round] = $choices ;
        }
    }



    public function getHistory()
    {
        return $this->history;
    }

}