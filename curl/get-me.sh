#!/usr/bin/env bash

source ./config.sh

curl --location --request GET "${BASE_URL}/v2/me" \
--header "Authorization: Bearer ${TOKEN}" 2>/dev/null | jq
