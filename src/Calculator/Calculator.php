<?php
namespace rudhro\Calculator;
class Calculator{
    public $num1;
    public $num2;
    function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    function autosum(){
        return $this->num1 + $this->num2;
    }
    function sub(){
        return $this->num1 - $this->num2;
    }
    function mal(){
        return $this->num1 * $this->num2;
    }
    function div(){
        return $this->num1 / $this->num2;
    }
}

?>