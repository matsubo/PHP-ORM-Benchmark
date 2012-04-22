<?php
require_once 'bootstrap.php';
require_once '../lib/ORMBenchmark.php';

$benchmark = new ORMBenchmark('doctrine');
$benchmark->start();
for($i=0;$i<5000;$i++){

    $author = Doctrine_Core::getTable('Author')->find(rand(1,100000));

    $author->password = 'newpassword-'.rand(1,100000);
    $author->save();

}
$benchmark->finish();
$benchmark->printResult();


