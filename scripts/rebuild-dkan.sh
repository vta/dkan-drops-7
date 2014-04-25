#!/bin/bash

cd ../profiles
rm -rf dkan
git clone --branch 7.x-1.x git@github.com:nuams/dkan.git 
cd dkan
sh dkan.rebuild.sh
rm -rf .git
rm .gitignore
