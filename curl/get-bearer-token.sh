#!/usr/bin/env bash

source ./config.sh

curl --location --request POST "${BASE_URL}/oauth/token" \
--form 'grant_type="client_credentials"' \
--form 'client_id="'${CLIENT_ID}'"' \
--form 'client_secret="'${CLIENT_SECRET}'"' \
--form 'scope="*"' | jq -r ".access_token"
