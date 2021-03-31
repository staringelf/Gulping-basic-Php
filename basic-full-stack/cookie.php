<?php
  if( !isset($_COOKIE['levi']) ) {
    setcookie('levi', '101', time()+3600);
  }
?>

<pre>
<?php
  print_r($_COOKIE);
?>
</pre>

<p><a href="cookie.php">Click ME </a>or press Refresh</p>  