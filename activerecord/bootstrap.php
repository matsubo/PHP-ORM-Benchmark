<?php
require_once 'lib/vendor/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
  $cfg->set_model_directory('models');
  $cfg->set_connections(array(
         'development' => 'mysql://orm@192.168.0.40/orm'));
});

