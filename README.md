<p align="center">
<a href="https://console.platform.sh/projects/create-project/?template=https://github.com/vincenzo/daalder-platformsh/blob/master/template-definition.yaml&utm_campaign=deploy_on_platform?utm_medium=button&utm_source=affiliate_links&utm_content=https://github.com/vincenzo/daalder-platformsh/blob/master/template-definition.yaml" target="_blank" title="Deploy with Platform.sh"><img src="https://platform.sh/images/deploy/deploy-button-lg-blue.svg"></a>
</p>

# Daalder for Platform.sh

This template provides a basic [Daalder](https://daalder.io/) set-up.  It comes pre-configured to use MariaDB database and Elastic Search.  The public files symlink is also replaced with a custom web path definition, so it is unnecessary. It is intended for you to use as a starting point and modify for your own needs.

Daalder is built with Laravel, which is an opinionated, integrated rapid-application-development framework for PHP.

## Features

* PHP 7.4
* MariaDB 10.4
* Elastic Search 7.10
* Daalder 11
* Automatic TLS certificates
* Composer-based build

## Customizations

The following changes have been made relative to a plain Laravel project.  If using this project as a reference for your own existing project, replicate the changes below to your project.

* The `.platform.app.yaml`, `.platform/services.yaml`, and `.platform/routes.yaml` files have been added.  These provide Platform.sh-specific configuration and are present in all projects on Platform.sh.  You may customize them as you see fit.
* An additional Composer library, [`platformsh/laravel-bridge`](https://github.com/platformsh/laravel-bridge), has been added.  It automatically maps Platform.sh's environment variables to Laravel's environment variables where possible.  It leverages the [`platformsh/config-reader`](https://github.com/platformsh/config-reader-php) library.
* The Laravel Bridge library also automatically configures Laravel to use Redis for both caching and session storage. That may be enabled by [adding a Redis service](https://docs.platform.sh/configuration/services/redis.html) to this project and configuring the `rediscache` and `redissession` relationships in `.platform.app.yaml`.
* Laravel normally wants you to create a symlink for the public storage directory, using the `artisan storage:link` command.  That is not necessary and will not work on Platform.sh due to the read-only file system. Instead, a dedicated web path mapping is included for the `/storage` path that has the same effect.

### Daalder-specific customizations

* `auth.guards.api.driver` set to `passport`
* `auth.providers.users.model` set to `'Pionect\Daalder\Models\User\User::class'`
* `daalder-onboarding.active` set to `false` (to disable the Daalder onboarding wizard provided by default at `/onboarding`)
* `'cors' => \Fruitcake\Cors\HandleCors::class` added to `App\Http\Kernel::$routeMiddleware`

Also, files from vendors have been published as per Daalder onboarding process

```shell
php artisan config:clear
php artisan vendor:publish --provider='Pionect\Daalder\DaalderServiceProvider'
php artisan vendor:publish --tag=backoffice-config
php artisan vendor:publish --tag=migrations
php artisan vendor:publish --tag=database
php artisan vendor:publish --tag=public
```

and checked into this repository.

## Private Packagist authentication required

When you purchase Daalder, you receive authentication credentials to fetch the package from a [Private Packagist](https://packagist.com/) repository.
In order to use this authentication with Platform.sh, you must enter your credentials as a `COMPOSER_AUTH` environment variable. The easiest way to do this is to use the [Platform.sh CLI](https://docs.platform.sh/development/cli.html):

```shell
# You can omit the "-p YOUR_PLATFORM_PROJECT_ID" part if you are running the command from a platform checkout of your project.
platform variable:create -l project --name=COMPOSER_AUTH --value='{"http-basic": {"pionect.repo.packagist.com": {"username": "token", "password": "YOUR_TOKEN"}}}' --json=true --sensitive=true --prefix=env: --visible-build=true --visible-runtime=false -p YOUR_PLATFORM_PROJECT_ID
```

Alternatively, you can add the variable using the Web Console at:

```
https://console.platform.sh/YOUR_USERNAME/YOUR_PROJECT_ID/-/settings/variables
```

## Test whether Daalder is up and running after the first deployment

If everything went according to plan, then a file was generated in the application container, located at

```
storage/auth-clients.txt
```

What you need to do now is to get the last two lines of that file. If you have the CLI installed, then:

```shell
# You can omit the "-p YOUR_PLATFORM_PROJECT_ID" part if you are running the command from a platform checkout of your project.
platform ssh "tail -n2 storage/auth-clients.txt" -p YOUR_PLATFORM_PROJECT_ID
```

Otherwise, the Web Console will provide you with an SSH command line. Just go to your project, then to the environment you want to access, and then click the SSH button in the top right corner. Once you have SSH'd into the application container, you can run:

```shell
tail -n2 storage/auth-clients.txt
```

In either instances, the output should be something like the following:

```
Client ID: 3
Secret: XhGHvCChMN4rVHy4moZuVIxLbkeB8FeQaVQ03Isi
```

You can now use those details with the following `curl` request

```shell
curl --location --request POST 'https://www.master-7rqtwti-gbbgdbsa65hqc.eu-5.platformsh.site/oauth/token' \
      --form 'grant_type="client_credentials"' \
      --form 'client_id="3"' \
      --form 'client_secret="XhGHvCChMN4rVHy4moZuVIxLbkeB8FeQaVQ03Isi"' \
      --form 'scope="*"'
```

being careful of changing the URL using the primary route (see `platform route:get --help`) from the environment you would like to test.

A successful request will result in a response such as the following:

```json
{"token_type":"Bearer","expires_in":31536000,"access_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDVlOTQyNDVkOWRlMWRkOGExYWZlNThjN2I2OTExY2RiMTcyMmUzNTQ5NDBkYThlZWRiYjQxMGVjNDM1NTYzOWYzM2UwNDI5YjFjMDdhN2QiLCJpYXQiOjE2MzExMDUzNjYsIm5iZiI6MTYzMTEwNTM2NiwiZXhwIjoxNjYyNjQxMzY1LCJzdWIiOiIiLCJzY29wZXMiOlsidmlldy1icmFuZCIsInN0b3JlLWJyYW5kIiwiZGVsZXRlLWJyYW5kIiwidmlldy1jb21wb25lbnRzIiwic3RvcmUtY29tcG9uZW50cyIsImRlbGV0ZS1jb21wb25lbnRzIiwidmlldy1jb25maWciLCJzdG9yZS1jb25maWciLCJkZWxldGUtY29uZmlnIiwidmlldy1jdXN0b21lciIsInN0b3JlLWN1c3RvbWVyIiwiZGVsZXRlLWN1c3RvbWVyIiwidmlldy1kaXNjb3VudCIsInN0b3JlLWRpc2NvdW50IiwiZGVsZXRlLWRpc2NvdW50Iiwidmlldy1sZWFkIiwic3RvcmUtbGVhZCIsImRlbGV0ZS1sZWFkIiwidmlldy1vcmRlciIsInN0b3JlLW9yZGVyIiwiZGVsZXRlLW9yZGVyIiwidmlldy1vZmZlciIsInN0b3JlLW9mZmVyIiwiZGVsZXRlLW9mZmVyIiwidmlldy1wcm9kdWN0Iiwic3RvcmUtcHJvZHVjdCIsImRlbGV0ZS1wcm9kdWN0Iiwidmlldy1wcm9kdWN0LWF0dHJpYnV0ZSIsInN0b3JlLXByb2R1Y3QtYXR0cmlidXRlIiwiZGVsZXRlLXByb2R1Y3QtYXR0cmlidXRlIiwidmlldy1wcm9kdWN0LWF0dHJpYnV0ZS1ncm91cCIsInN0b3JlLXByb2R1Y3QtYXR0cmlidXRlLWdyb3VwIiwiZGVsZXRlLXByb2R1Y3QtYXR0cmlidXRlLWdyb3VwIiwidmlldy1wcm9kdWN0LXByb3BlcnR5Iiwic3RvcmUtcHJvZHVjdC1wcm9wZXJ0eSIsImRlbGV0ZS1wcm9kdWN0LXByb3BlcnR5Iiwic3RvcmUtcHJvZHVjdC1zZWxlY3Rpb24iLCJkZWxldGUtcHJvZHVjdC1zZWxlY3Rpb24iLCJzdG9yZS1wcm9kdWN0LXNlbGVjdGlvbi1maWx0ZXIiLCJkZWxldGUtcHJvZHVjdC1zZWxlY3Rpb24tZmlsdGVyIiwidmlldy12YXJpYWJsZSIsInN0b3JlLXZhcmlhYmxlIiwiZGVsZXRlLXZhcmlhYmxlIiwidmlldy1mYXZvcml0ZSIsInN0b3JlLWZhdm9yaXRlIiwiZGVsZXRlLWZhdm9yaXRlIiwidmlldy12YXJpYXRpb24iLCJzdG9yZS12YXJpYXRpb24iLCJkZWxldGUtdmFyaWF0aW9uIiwidmlldy1wcm9kdWN0LXRlbXBsYXRlIiwic3RvcmUtcHJvZHVjdC10ZW1wbGF0ZSIsImRlbGV0ZS1wcm9kdWN0LXRlbXBsYXRlIiwidmlldy1yZXZpZXciLCJzdG9yZS1yZXZpZXciLCJkZWxldGUtcmV2aWV3IiwiY2hhbmdlLXN0YXRlLXJldmlldyIsInN0b3JlLXJldmlldy1pbnZpdGUiLCJ2aWV3LXN0YXR1cyIsInZpZXctc3VwcGxpZXIiLCJzdG9yZS1zdXBwbGllciIsImRlbGV0ZS1zdXBwbGllciIsInZpZXctdGFnIiwic3RvcmUtdGFnIiwiZGVsZXRlLXRhZyIsInZpZXctdXNlciIsInN0b3JlLXVzZXIiLCJkZWxldGUtdXNlciIsInZpZXctcm9sZSIsInN0b3JlLXJvbGUiLCJkZWxldGUtcm9sZSIsInZpZXctcGVybWlzc2lvbiIsInN0b3JlLXBlcm1pc3Npb24iLCJkZWxldGUtcGVybWlzc2lvbiIsInZpZXctcGFnZSIsInN0b3JlLXBhZ2UiLCJkZWxldGUtcGFnZSIsInZpZXctY2F0ZWdvcnkiLCJzdG9yZS1jYXRlZ29yeSIsImRlbGV0ZS1jYXRlZ29yeSIsInZpZXctc2VydmljZSIsInN0b3JlLXNlcnZpY2UiLCJkZWxldGUtc2VydmljZSIsInZpZXctc2hpcHBpbmciLCJzdG9yZS1zaGlwcGluZyIsImRlbGV0ZS1zaGlwcGluZyIsInZpZXctdmF0Iiwic3RvcmUtdmF0IiwiZGVsZXRlLXZhdCIsInZpZXctc3RvcmUiLCJzdG9yZS1zdG9yZSIsImRlbGV0ZS1zdG9yZSIsInZpZXctcGlja3VwLXBvaW50Iiwic3RvcmUtcGlja3VwLXBvaW50IiwiZGVsZXRlLXBpY2t1cC1wb2ludCIsInZpZXctc3RvY2siLCJzdG9yZS1zdG9jayIsImRlbGV0ZS1zdG9jayIsInZpZXctcHJvY3VyZW1lbnQiLCJzdG9yZS1wcm9jdXJlbWVudCIsImRlbGV0ZS1wcm9jdXJlbWVudCIsInZpZXctcGF5bWVudCIsInN0b3JlLXBheW1lbnQiLCJkZWxldGUtcGF5bWVudCIsInZpZXctcHJvZHVjdC1hdHRyaWJ1dGUtc2V0Iiwic3RvcmUtcHJvZHVjdC1hdHRyaWJ1dGUtc2V0IiwiZGVsZXRlLXByb2R1Y3QtYXR0cmlidXRlLXNldCIsInZpZXctbWFwIiwidmlldy1zZWFyY2giLCJ2aWV3LWVtYWlsLXRlbXBsYXRlIiwic3RvcmUtZW1haWwtdGVtcGxhdGUiLCJkZWxldGUtZW1haWwtdGVtcGxhdGUiLCJ2aWV3LW1lZGlhIiwic3RvcmUtbWVkaWEiLCJkZWxldGUtbWVkaWEiLCJ2aWV3LW9hdXRoLWNsaWVudCIsInN0b3JlLW9hdXRoLWNsaWVudCIsImRlbGV0ZS1vYXV0aC1jbGllbnQiLCJ2aWV3LXBhc3N3b3JkLXRva2VuIiwic3RvcmUtcGFzc3dvcmQtdG9rZW4iLCJkZWxldGUtcGFzc3dvcmQtdG9rYW4iXX0.xxchqbJw1Plzzu7oEJufDdB_kDrqNiJKgrv7WCNkCBGkkMN9yrsOHWz_jhMABcLADqBSPER_MHivCEymvZcLRoMJUCWUNGoD-s-px5XQWm63qf_j4K3bFtQdHQdOfGA_hQuahYyJmNCFHV0PFAyPfvGuoXajMnSioH7WwbNOp_LxBfTB_BKloC_EqGKSQt4gQEHEORefd9H7gHJg-P48TqXQ1PgyBtaDqhshCcSEz8e48NprhZrmHrYafT6D8L81frntWe_Ens5nZycY5xMb2ve8xzTM4NIRMf-iOR2ALbhXa9zFugR3vaIzLreBp593xIjBISf1q7Pebt65ljpVxClWyh4hlf5OVppXcpgx5ahEveloCFiqBFMfS0H7tZR2YXcPcs0hBjpz8E_UfiE8tlelU2qzrUHqQu2fSW-txL7Ap4yFhvd46h-b0PhBORAVFG_B9sog4wh8fNlhf_AWo3CzwVOIBgotnexQcgd7Jbysxy6B48KTvSz8a8gxHcPXK3aRzhYzQmuO9BbTIY7CoVuJS9UZmjmUZ9-uZKLljnvSZxLWucnAUnPXsUSSXE7eywNb2jTedumv_YJVyp0kxuYEJ3cfZ3ML8HZgAo5pssFtS9HOysJ_aR7DIN9Nzm-68py4jsp0wUyqdMfgHV7UatHAARmMWVJizdH3p52MOlc"}
```

You can also use [the `curl` test scripts](https://github.com/vincenzo/daalder-platformsh/tree/master/curl) we have included in this template.

## Local development with Lando

[Lando](https://lando.dev/) vastly simplifies local development and DevOps, and it is Platform.sh’s recommended local development tool, as Lando now includes direct support for Platform.sh projects.

This template already includes a `.lando.upstream.yml` with some default configurations. All you need to do is to follow the [Quick Start](https://docs.platform.sh/development/local/lando.html#quick-start) as per Platform.sh's own documentation.

## References

* [Daalder](https://daalder.io/)
* [Laravel](https://laravel.com/)
* [PHP on Platform.sh](https://docs.platform.sh/languages/php.html)
