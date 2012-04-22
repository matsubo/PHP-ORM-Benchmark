<?php
require_once 'bootstrap.php';
require_once '../lib/ORMBenchmark.php';

$benchmark = new ORMBenchmark('php-activerecord');
$benchmark->start();
for($i=0;$i<5000;$i++){

  $author = Author::find(rand(1,100000));

  //  update Tito
  $author->password = sha1('newpassword-'.rand(1, 100000));
  $author->save();

}
$benchmark->finish();
$benchmark->printResult();
