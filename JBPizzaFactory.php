<?php

  include_once('AbstractJBPizzaFactory.php'); 
  include_once('JBClassicPizza.php');
  include_once('JBSkinnyPizza.php');

  class JBPizzaFactory extends AbstractJBPizzaFactory {
  
     
  
    function makeClassicPizza()
     {
       return new JBClassicPizza;
     }


    function makeSkinnyPizza()
     {
       return new JBSkinnyPizza;
     }
   
   
  }

?>