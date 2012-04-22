<?php
// doctrineに必要なクラスをロードします。
require_once(dirname(__FILE__) . '/lib/vendor/doctrine/Doctrine.php');
spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Doctrine_Core', 'modelsAutoload'));

Doctrine_Core::setModelsDirectory('models/generated');
Doctrine_Core::loadModels('models');




// doctrine全体の設定を行います。
$manager = Doctrine_Manager::getInstance();

// setPasswordをオーバーライドするため
$manager->setAttribute(Doctrine_Core::ATTR_AUTO_ACCESSOR_OVERRIDE, true);


// データベースへ接続します
$conn = Doctrine_Manager::connection('mysql://orm@192.168.0.40/orm', 'doctrine');

