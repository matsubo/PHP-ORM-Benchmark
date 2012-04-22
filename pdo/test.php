<?php
require_once 'bootstrap.php';

// ユーザを追加
$rand = rand(1,10000);
$sql = sprintf('INSERT INTO author VALUES(null, %s, %s)', $conn->quote('username-'.$rand), $conn->quote(sha1('password-'.$rand)));
$conn->exec($sql);


// ユーザオブジェクトを読み込み
$sql = sprintf('SELECT * FROM author WHERE id=%d', $conn->lastInsertId());
$row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

// パスワードを変更し、更新
$sql = sprintf('UPDATE author SET password=%s WHERE id=%d', $conn->quote(sha1('newpassword-'.rand(1,100000))), $row['id']);
$conn->exec($sql);


// ユーザを削除
$sql = sprintf('DELTE FROM author WHERE id=%d', $row['id']);
$conn->exec($sql);
