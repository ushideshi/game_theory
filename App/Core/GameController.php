<?php

namespace GameTheory;

class GameController
{

    private $round = 0;
    private $choices;
    private $scores;
    public static $previous1;
    public static $previous2;
    public static $current_round;

    public function __construct(){
        $this->setScore();
    }

    public function setCurrentRound($round){
        self::$current_round = $round;
    }

    public function setRounds(int $rounds){
        $this->round = $rounds;
    }

    public function setScore(){
        $this->scores = [
            'a-a' => [3, 3],
            'd-a' => [5, 0],
            'a-d' => [0, 5],
            'd-d' => [1, 1]
        ];
    }

    public function setPrevious1(string $value){
        self::$previous1 = $value;
    }

    public function setPrevious2(string $value){
        self::$previous2 = $value;
    }

    public static function getPrevious(){
        return self::$previous;
    }

    public static function getRound(){
        return self::$current_round;
    }

    public function getScore($choices){
        return $this->scores[$choices];
    }

    public function playerRound($player, $enemy, $rounds){

        for($r=0; $r<= $rounds; $r++){
            $choice1 = $player->getStrategy($r);
            $choice2 = $enemy->getStrategy($r);

            $score = $this->getScore(''.$choice1.'-'.$choice2.'');
            $player->adjustScore($score[0],$enemy);
            $player->setHistory($enemy, $r, ''.$choice1.'-'.$choice2.'');
            $enemy->adjustScore($score[1],$player);
            $this->setPrevious1($choice1);
            $this->setPrevious2($choice2);
        }

    }


}