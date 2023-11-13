<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$chindy = new Person("Chindy", "Bengkulu Utara");

// tambahkan value nama di object
$chindy->nama = "Chindy";

// panggil function sayHelloNull dengan parameter
$chindy->sayHelloNull("Teman-teman");

// buat object dari kelas person
$feby = new Person("Feby", "Argamakmur");

// tambahkan value nama di object
$feby->nama = "Feby";

// panggil function sayHelloNull dengan parameter null
$feby->sayHelloNull(null);
