#!/bin/sh

DIRDEPLOY='../cavobjects-github-page/'

echo "Push to github.com"
cd ${DIRDEPLOY}
git push origin gh-pages
echo "Deployed"