<?php

//Example -1
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

echo '<br>'

?>

<?php 
//Example-2

class Calculation{

    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x+$y;

        return $result;
    }

    public function mul(){
        $x = 100;
        $y = 300;
        $result = $x*$y;

        return $result;
    }

    public function sub(){
        $x = 100;
        $y = 300;
        $result = $x-$y;

        echo $result.'<br>';
    }

    public function div(){
        $x = 100;
        $y = 300;
        $result = $x/$y;

        echo $result.'<br>';
    }
}

$calculationObject = new Calculation();

echo $calculationObject -> sum(400, 400).'<br>'; //800

$resultData = $calculationObject -> mul();
echo $resultData+100;
echo '<br>';

$calculationObject -> sub();
$calculationObject -> div();

?>



