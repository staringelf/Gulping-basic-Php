
<pre>
<?php 
//Non OOP
  $levi = array(
    "fullname" => "Levi Ackermann",
    "room" => "3439D2"
  );
  
  $mikasa = array(
    "familyname" => "Ackermann",
    "givenname" => "Mikasa",
    "room" => "54D36"
  );
  
  function get_person_name($person) {
    if ( isset($person['fullname']) ) return $person['fullname'];
    if ( isset($person['familyname']) && isset($person['givenname']) ) {
      return $person['givenname'] . " " . $person['familyname'];
    };
    return false;
  }
  
  // passing string conacanated with \n to print, so it's like print "Levi Ackermann" . "\n"
  print get_person_name($levi) . "\n";
  print get_person_name($mikasa) . "\n";
  
//OOP

class Person {
  public $fullname = false;
  public $familyname = false;
  public $givenname = false;
  public $room = false;
  function  get_name () {
    if ( $this->fullname !== false ) return $this->fullname; 
    if( $this->familyname && $this->givenname ) {
      return $this->givenname . " " . $this->familyname;
    }
    return false;
  }
}

$levi = new Person ();
$levi->fullname = 'Levi Ackermann';
$levi->room = '3439D2';


$mikasa = new Person ();
$mikasa->familyname = 'Ackermann';
$mikasa->givenname = 'Mikasa';
$mikasa->room = '54D36';

print $levi->get_name() . "\n";
print $mikasa->get_name() . "\n";
?>
</pre>
