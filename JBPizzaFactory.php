<?php

  include_once('AbstractJBPizzaFactory.php'); 
  include_once('JBClassicPizza.php');

  class JBPizzaFactory extends AbstractJBPizzaFactory {
  
     
  
    function makeClassicPizza()
     {
       return new JBClassicPizza;
     }

   
   
  }

?>