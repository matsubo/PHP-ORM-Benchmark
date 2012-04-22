#!/bin/bash

# execute all ORM benchmark

# php-activerecord
cd activerecord
php53 benchmark.php
cd ..


# doctrine
cd doctrine
php benchmark.php 
cd ..


# PHPDAO
cd phpdao
php benchmark.php 
cd ..

# PDO
cd propel
php benchmark.php 
cd ..


# PDO
cd pdo
php benchmark.php 
cd ..


