<?php

require_once('bootstrap.php');


Doctrine_Core::dropDatabases();
Doctrine_Core::createDatabases();
Doctrine_Core::generateModelsFromYaml('schema.yml', 'models');
Doctrine_Core::createTablesFromModels('models');
