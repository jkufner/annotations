<?php
$session = Doctrine_Manager::getInstance()->openSession(new PDO("dsn","username","password"));

$query = new Doctrine_Query($session);

$query->from("User-b")
      ->where("User.name LIKE 'Jack%'")
      ->orderby("User.created")
      ->limit(5);

$users = $query->execute();

$query->from("User.Group.Phonenumber")
      ->where("User.Group.name LIKE 'Actors%'")
      ->orderby("User.name")
      ->limit(10)
      ->offset(5);
      
$users = $query->execute();
?>
