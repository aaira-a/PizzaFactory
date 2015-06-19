<?php

 include_once('AbstractJBClassicPizza.php');


class JBClassicPizza extends AbstractJBClassicPizza {
    private $pizzaName;
    private $pizzaSize;
    private $pizzaPrice;

    function __construct() {
        $this->pizzaName = 'JB Fine Classic Pizza';
        $this->pizzaSize = 'Large';
        $this->pizzaPrice = 'Rm 50';
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

