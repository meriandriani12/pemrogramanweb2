<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //Override
    public function ucapsalam()
    {
        echo "Hello my name is " . $this->nama;
    }
}