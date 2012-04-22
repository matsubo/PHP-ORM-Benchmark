<?php
// 設定ファイルを読み込み
include_once 'generated/include_dao.php';

// ユーザを追加
$rand = rand(1,100000);

$author = new Author();
$author->name = 'name-'.$rand;
$author->password = sha1('password-'.$rand);
$id = DAOFactory::getAuthorDAO()->insert($author);


// ユーザオブジェクトを取得
$author = DAOFactory::getAuthorDAO()->load($id);

// パスワードを変更し、更新
$author->password = sha1('newpassword-'.rand(1,100000));
DAOFactory::getAuthorDAO()->update($author);


// ユーザを削除
DAOFactory::getAuthorDAO()->delete($author->id);


