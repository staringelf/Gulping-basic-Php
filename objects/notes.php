<pre>
  <?php
  //Access OPerators 

  //' -> ' for attributes and methods, instance

  //' :: ' for constants and statics 

  /*-- Object Life Cycle */
  //Objects are created, used and discarded

  class PA {  //PartyAnimal
    function __construct() {
      echo("Constructed\n");
    }
    function something() {
      echo("Something\n");
    }
    function __destruct() {
      echo("Destructed\n");
    }
  }
    
  $x = new PA();
  $y = new PA();
  $x->something();
  $y->something();
  echo("The-End ??\n");

  ?>
</pre>
