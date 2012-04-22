<?php
require_once 'bootstrap.php';
require_once '../lib/ORMBenchmark.php';

$benchmark = new ORMBenchmark('propel');
$benchmark->start();
for ($i=0; $i<5000; $i++){
    $author = AuthorQuery::create()->findPK(rand(1, 100000));

    $author->setPassword(sha1('newpassword-'.rand(1, 100000)));
    $author->save();

}

$benchmark->finish();
$benchmark->printResult();


