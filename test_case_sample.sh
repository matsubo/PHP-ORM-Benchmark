#!/bin/bash

# execute all ORM  sample code

# php-activerecord
cd activerecord
php53 test.php
cd ..


# doctrine
cd doctrine
php test.php 
cd ..


# PHPDAO
cd phpdao
php test.php 
cd ..

# PDO
cd propel
php test.php 
cd ..



