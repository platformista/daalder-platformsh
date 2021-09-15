#!/usr/bin/env bash

source ./config.sh

curl --location --request POST "${BASE_URL}/v2/users" \
--header "Authorization: Bearer ${TOKEN}" \
--header 'Content-Type: text/plain' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImxOa1BUS25MNVNuL0Ntek5tMzNKK3c9PSIsInZhbHVlIjoiQURoS3FEbXRUMm5qM1h6K3F3WXovVzJ4UzRZYVFnL2FFdWF5WU9LZXF2UVFRNGR6dG9OSHd3NnRGeDhqNlIrWkVFNnNCMzB1Um1xNGo4UE1SMjVIMERIQkQ5KzJKbW9LV0xMZmdkN0lYM3RFT2QyZG02WDZ6b1dNSXE2VVJVNG8iLCJtYWMiOiJmZDQzYmMzZmQ2MmI4OTNmYmI4ZjhhY2UyNDNhYzdiMzM3ZjZlNTg0NWVlY2I1YmNlMTJlODdiZGFlZjEzMTFhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImhnUG9odk1ScGtERW51aXMxdXNpdkE9PSIsInZhbHVlIjoiNXQwcTBBRUl3KzlibitaOHM0Vkx2UWIvYVRLUmhRQzlqZVNhYW5HTjJTUGQzWG9BeUF0b05GSmM5V29KY2lyaEpmTFdidDdveWNnMUxuTUhBMERxd2ZOdGhqcWJCN2JpdUlMb0s2azA0a3ZjWlhLWXFWMXNQZTA3SlJzUS80VkEiLCJtYWMiOiJiZTc2NWNkNjRjZDQ4ZWJlYzQ2ODczZjU0YzRlMGNlNzM5Y2Y2NWM4ZDk3NmM2NzZiYjkzNGM1NTBkM2UwMmZiIiwidGFnIjoiIn0%3D' \
--data-raw '{
	"firstname": "John",
	"lastname": "Smith",
	"email": "johnsmith@pionect.nl",
	"password": "password"
}' 2>/dev/null
