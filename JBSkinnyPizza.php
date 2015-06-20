<?php

 include_once('AbstractJBSkinnyPizza.php');


class JBSkinnyPizza extends AbstractJBClassicPizza {
    private $pizzaName;
    private $pizzaSize;
    private $pizzaPrice;

    function __construct() {
        $this->pizzaName = 'JB Skinny Pizza';
        $this->pizzaSize = 'Small';
        $this->pizzaPrice = 'Rm 25';
    }

    function getPizzaName() {
        return $this->pizzaName;
    }
    function getPizzaSize() {
        return $this->pizzaSize;
    }
    function getPizzaPrice() {
        return $this->pizzaPrice;
    }
}


?>

