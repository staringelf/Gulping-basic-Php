<pre>
  <?php
    class Template {
      public $pub = 'Public';
      protected $protec = 'Protected';
      private $priv = 'Private';
  
      function printHello () {
        echo "\n---PrintHello---\n";
        echo $this->pub."\n";
        echo $this->protec."\n";
        echo $this->priv."\n";
      }
    }
    echo("--Template--\n");
    $obj = new Template();
    echo $obj->pub;
    //echo $obj->protec; //fatal error - non accessible
    //echo $obj->priv;  //fatal error - non accessible
    $obj->printHello();
    
    class AnotherTemplate extends Template{
      function printHello () {
        echo "\n---PrintHello---\n";
        echo $this->pub."\n";
        echo $this->protec."\n";
        echo $this->priv."\n"; // Undefined, cannot access private in inheriting classes
      }
    }
    echo ("\n--Inheriting Class--\n");
    $obj2 = new AnotherTemplate();
    echo $obj2->pub;
    $obj2->printHello(); 
  ?>

</pre>
