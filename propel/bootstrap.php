<?php
// propelライブラリを読み込む
require_once 'lib/vendors/propel/runtime/lib/Propel.php';

// データベース、ORMの設定を読み込む
Propel::init("./orm/build/conf/orm-conf.php");

// クラスの場所を設定する
set_include_path("./orm/build/classes" . PATH_SEPARATOR . get_include_path());


// データベースへ接続
$conn = Propel::getConnection();
