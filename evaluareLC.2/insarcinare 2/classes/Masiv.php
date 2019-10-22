<?php
class Masiv {
    public $masiv = [];

    public function _construct ($masiv){
        $this -> masiv = $masiv;
    }
    public function add($number){
        array_push($this->masiv, $number);
    }
    public function show($position){
        return $this->masiv[$position];
    }
    public function showAll(){
        return $this->masiv;
    }

}