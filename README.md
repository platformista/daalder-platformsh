<p align="center">
<a href="https://console.platform.sh/projects/create-project/?template=https://github.com/vincenzo/daalder-psh/blob/master/template-definition.yaml&utm_campaign=deploy_on_platform?utm_medium=button&utm_source=affiliate_links&utm_content=https://github.com/vincenzo/daalder-psh/blob/master/template-definition.yaml" target="_blank" title="Deploy with Platform.sh"><img src="https://platform.sh/images/deploy/deploy-button-lg-blue.svg"></a>
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
* `'cors' => \Fruitcake\Cors\HandleCors::class` added to `App\Http\Kernel::$routeMiddleware`

Also, files from vendors have been published as per Daalder onboarding process

```
php artisan config:clear
php artisan vendor:publish --provider='Pionect\Daalder\DaalderServiceProvider'
php artisan vendor:publish --tag=backoffice-config
php artisan vendor:publish --tag=migrations
php artisan vendor:publish --tag=database
php artisan vendor:publish --tag=public
```

and checked into this repository.

## Platform.sh minimum requirements for Daalder

Due to Daalder's requirement of a minimum 1GB PHP memory limit, this template requires at least a `LARGE` plan.
When you first deploy this template to Platform.sh, it will use `DEVELOPMENT` plan. Therefore, you must upgrade the plan after the first deployment. You can do this from the Web Console.

## Private Packagist authentication required

When you purchase Daalder, you receive authentication credentials to fetch the package from a [Private Packagist](https://packagist.com/) repository.
In order to use this authentication with Platform.sh, you must enter your credentials as a `COMPOSER_AUTH` environment variable. The easiest way to do this is to use the [Platform.sh CLI](https://docs.platform.sh/development/cli.html):

```
platform variable:create -l project --name=COMPOSER_AUTH --value='{"http-basic": {"pionect.repo.packagist.com": {"username": "token", "password": "YOUR_TOKEN"}}}' --json=true --sensitive=true --prefix=env: --visible-build=true --visible-runtime=false -p YOUR_PLATFORM_PROJECT_ID
```

Alternatively, you can add the variable using the Web Console at:

```
https://console.platform.sh/YOUR_USERNAME/YOUR_PROJECT_ID/-/settings/variables
```

## References

* [Daalder](https://daalder.io/)
* [Laravel](https://laravel.com/)
* [PHP on Platform.sh](https://docs.platform.sh/languages/php.html)
