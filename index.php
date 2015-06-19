<?php

include_once('JBPizzaFactory.php');



  /*
 *   Initialization in Client
 */

  echo ' <br><br>----- BEGIN TESTING ABSTRACT FACTORY PATTERN ----- <br><br>';
  echo 'Testing JBPizzaFactory <br><br>';

  $jbPizzaFactoryInstance = new JBPizzaFactory;
  testJBConcreteFactory($jbPizzaFactoryInstance);

  echo "<br><br>----- END TESTING ABSTRACT FACTORY PATTERN -----<br><br>";

  function testJBConcreteFactory($jbPizzaFactoryInstance)
  {

      $pizzaJB = $jbPizzaFactoryInstance->makeClassicPizza();

      echo'<br><br><br> Pizza Name: '.$pizzaJB->getPizzaName();
      echo "<br>";
      echo'<br> Pizza Size: '.$pizzaJB->getPizzaSize();
      echo "<br>";
      echo'<br> Pizza Price: '.$pizzaJB->getPizzaPrice();

       echo "<br> ---------------------------------------------------- <br>";

 
  }



?>