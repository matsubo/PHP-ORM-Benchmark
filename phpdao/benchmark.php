<?php
include_once 'generated/include_dao.php';
require_once '../lib/ORMBenchmark.php';

$benchmark = new ORMBenchmark('PHPDAO');
$benchmark->start();
for($i=0;$i<5000;$i++){

    // ユーザオブジェクトを取得
    $author = DAOFactory::getAuthorDAO()->load(rand(1, 100000));

    // パスワードを変更し、更新
    $author->password = sha1('newpassword-'.rand(1, 100000));
    DAOFactory::getAuthorDAO()->update($author);

}
$benchmark->finish();
$benchmark->printResult();


