<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Mi primer PHP</title>
    </head>
    <body>
      <h1>Mi primer PHP.</h1>
      <p>Ésto es HTML.</p>
      <?php
      echo "<p>Hello World!.</p>";
      echo "<p>Ésto es HTML desde PHP.</p>";
      function myTest() {
        static $x=0;
        echo $x;
        $x++;
      }
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      myTest();
      ?>
    </body>
  </html>