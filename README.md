## Docker for Laravel
The source code for docker-for-laravel.com

### Why docker-for-laravel.com?
I have a laravel application, I want to dockerize my app and deploy on production. I have some questions like
1. What is the best way to create an optimal image for Laravel App.
2. Should I have `nginx` and `php` in the same docker image.
3. Should I have different containers running for `web`, `scheduler`, `queues`, etc.
4. What is the best strategy to plan dockerization of app?

### Requirements
The following tools are required in order to start the installation.
* PHP 8.3
* composer
* npm

### Installation
1. Clone this repository `git clone git@github.com:codeat3/docker-for-laravel.com.git`
2. Copy `.env.example` file to '.env`
3. Install the PHP dependencies with `composer install`
4. Generate a new app key with `php artisan key:generate`
5. Install and compile the front-end dependencies with `npm install && npm run dev`
6. Serve the website locally by running `php artisan serve`

You can now visit the app in your browser by visiting http://127.0.0.1:8000.

### Contribution
If you have any good resources which can help a laravel developer get the dockerized setup on production. Create a PR and add the resource to `app/Models/DockerResource.php`.

The format of the resource should be as follows
```php
[
    'id' => 4,
    'author' => 'Author Name',
    'social_handle' =>  'social handle link',
    'title' => 'title of the resource',
    'link' => 'link of the resource'
],
```
