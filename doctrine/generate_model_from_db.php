<?php
// doctrineの読み込み
require_once(dirname(__FILE__) . '/lib/vendor/doctrine/Doctrine.php');
spl_autoload_register(array('Doctrine', 'autoload'));


// ORM用クラスの自動生成
$conn_id = 'doctrine';
$conn = Doctrine_Manager::connection('mysql://orm@192.168.0.40/orm', $conn_id);
Doctrine_Core::generateModelsFromDb('models', array($conn_id), array('generateTableClasses' => true));

