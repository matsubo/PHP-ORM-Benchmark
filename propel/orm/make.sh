#!/bin/sh

rm -rf build/classes  biuld/conf  schema.xml 

propel-gen ./ reverse

propel-gen 
