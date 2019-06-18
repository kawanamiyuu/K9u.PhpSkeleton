# K9u.PhpSkeleton

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

# initialize repository
rm -rf .git
git init
git add .
git commit -m "create project"
```
