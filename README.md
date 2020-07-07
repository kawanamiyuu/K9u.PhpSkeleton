# K9u.PhpSkeleton

[![badge](https://github.com/kawanamiyuu/K9u.PhpSkeleton/workflows/CI/badge.svg)](https://github.com/kawanamiyuu/K9u.PhpSkeleton/actions?query=workflow%3ACI)

## How to Initialize project

```shell
# clone and rename skeleton
git clone https://github.com/kawanamiyuu/K9u.PhpSkeleton.git
mv K9u.PhpSkeleton K9u.{PackageName}
cd K9u.{PackageName}

# edit package name
egrep -ri "php-?skeleton" .
vi ...

# edit `type` property of compser.json
# "project" or "library"
vi compser.json

# check composer project
composer validate
composer install
composer check

# initialize repository
rm -f src/HelloWorld.php tests/HelloWorldTest.php
rm -rf .git
git init
git add .
git commit -m "create project"
```
