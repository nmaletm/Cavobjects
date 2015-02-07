#!/bin/sh

DIRDEPLOY='../cavobjects-github-page/'

rm -rf 'build/'
echo "Generate pages"
lynx -dump http://cavobjects.storn.es/generate-page.php > /dev/null

echo "Remove all old files"
rm -rf ${DIRDEPLOY}*

echo "Copy resources"
cp -r images ${DIRDEPLOY}
cp -r css ${DIRDEPLOY}
cp -r js ${DIRDEPLOY}
cp -r build/* ${DIRDEPLOY}



echo "Deploy to github.com"
cd ${DIRDEPLOY}
git add .
git commit -am "Deploy"
git push origin gh-pages
echo "Deployed"