#!/usr/bin/env bash

if [ "$(echo $COMPOSER_AUTH | jq -r '."http-basic"."pionect.repo.packagist.com".username')" = "token" ]; then
  composer install
  find ./.daalder/patches -iname "*.diff" | while read FILE; do patch -p1 < ${FILE}; done
else
  echo
  echo "IMPORTANT: BUILD SKIPPED"
  echo "Packagist authentication is required in order to fetch the pionect/daalder package."
  echo "Please add the COMPOSER_AUTH environment variable with your credentials, either by using the Web Console or by running the following command:"
  echo
  echo 'platform variable:create -l project --name=COMPOSER_AUTH --value="{"http-basic": {"pionect.repo.packagist.com": {"username": "token", "password": "YOUR_TOKEN"}}}" --json=true --sensitive=true --prefix=env: --visible-build=true --visible-runtime=false -p YOUR_PLATFORM_PROJECT_ID'
fi
