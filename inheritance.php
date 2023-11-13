<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "Chindy";
$manager->sayHello("Teman-teman");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vp = new VicePresident();
$vp->nama = "Feby";
$vp->sayHello("Teman-teman");
