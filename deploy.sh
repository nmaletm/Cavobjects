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
cp -r copy/* ${DIRDEPLOY}

