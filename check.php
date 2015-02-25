<?php
  echo $_POST["name"];
  echo $_POST["password"];
  echo $_POST["sex"];
  echo $_POST["pref"];
  echo $_POST["name"];
  echo $_POST["hobby[0]"];
  foreach ($_POST["hobby"] as $hobby) {
    echo $hobby;
  }
  echo $_POST["note"];
  echo $_POST["submit"];
?> 
