<?php

class Car{

    public function color(){
        echo 'red <br>';
    }

    public function model(){
        echo 'B4323450 <br>';
    }

    public function engine(){
        echo '3000CC <br>';
    }
}

$carObject = new Car ();

$carObject->color();
$carObject->model();
$carObject->engine();
?>