<?php
// This file generated by Propel 1.5.2 convert-conf target
// from XML runtime conf file /home/matsu/repository/script/orm/propel/orm/build/config/runtime-config.xml
$conf = array (
  'datasources' => 
  array (
    'orm' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=192.168.0.40;dbname=orm',
        'user' => 'orm',
        'password' => '',
      ),
    ),
    'default' => 'orm',
  ),
  'generator_version' => '1.5.2',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-orm-conf.php');
return $conf;