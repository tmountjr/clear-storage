# Clear Storage #

## Introduction ##

For heavily-used apps, Laravel's `app/storage/views` directory can get cluttered, slowing down performance and potentially causing cache problems. Clear Storage removes those files.

## Installation ##

Install using composer: `composer require eems/ee-clear-storage:~1.0`

## Usage ##

While Clear Storage can be run manually from the command line (`php artisan storage:clear-views`), it should be run from within a deployment script, clearing out the storage directory on each new deployment.

## License ##

Clear Storage is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).