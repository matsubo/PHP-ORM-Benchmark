<?php
require_once 'bootstrap.php';
require_once '../lib/ORMBenchmark.php';

$benchmark = new ORMBenchmark('PDO');
$benchmark->start();
for($i=0;$i<5000;$i++){

    // ユーザオブジェクトを読み込み
    $sql = sprintf('SELECT * FROM author WHERE id=%d', rand(1, 100000));
    $row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

    // パスワードを変更し、更新
    $sql = sprintf('UPDATE author SET password=%s WHERE id=%d', $conn->quote('newpassword-'.rand(1, 100000)), $row['id']);
    $conn->exec($sql);

}
$benchmark->finish();
$benchmark->printResult();


