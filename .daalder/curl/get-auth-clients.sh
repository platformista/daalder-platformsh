#!/usr/bin/env bash

source ./config.sh

curl --location --request GET "${BASE_URL}/v2/auth-clients" \
--header "Authorization: Bearer ${TOKEN}" 2>/dev/null | jq
