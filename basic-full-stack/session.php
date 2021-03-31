<?php
  session_start();
  if( !isset($_SESSION['attempts']) ) {
    echo("<p>Sesson is empty!</p>\n");
    $_SESSION['attempts'] = 0;
  } else if ( $_SESSION['attempts'] < 3){
    $_SESSION['attempts'] += 1;
    echo("<p>Added One..</p>\n");
  } else {
    session_destroy();
    session_start();
    echo("Session Restarted!");
  }
?>

<p><a href="session.php">Click ME!</a></p>
<p> Our Session Id: <?php echo(session_id()); ?></p>
<pre>
<?php print_r($_SESSION);?>
</pre>