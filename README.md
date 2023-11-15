<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Description

Please check `software_engineering_candidates.pdf` in the root of the repository for details.
<ul>
 <li>1. Сreate a user registration form that consists of the following input fields:</li>
<ul>
    <li>Username</li>
    <li>Email</li>
    <li>Password</li>
    <li>Password confirmation</li>
    <li>Agreement checkbox</li>
    <li>Register button</li>
    </ul>
<li>2. Save user data in the database.</li>
<li>3. Create a login form where the user can login to the system.</li>
</ul>
    Task Requirements
<ul>
    <li>1. Use Laravel Framework and MySQL database.</li>
    <li>2. The form should be secure.Try to implement as many security checks as you can.</li>
</ul>

## Implementation

List of implementation:
<ul>
    <li>PHP>=8.1</li>
    <li>Laravel>=10</li>
    <li>MYSQL>=8</li>
    <li>Implemented `compose.yml` for development with `php`,`mysql`, `nginx` configuration files</li>
    <li>Implemented SPA with <a href="https://livewire.laravel.com">Laravel Livewire</a></li>
    <li>Views was implemented via <a href="https://laravel.com/docs/10.x/starter-kits#breeze-and-livewire">Laravel Breeze</li>
</ul>

## Set Up

You need to have docker on your local machine to run application via docker or `MYSQL8` and `PHP8.1` if you dont. Please check the list of installation steps. We describing the case if yu want to use docker-compose.

Step by step:
<ul>
    <li>0. `git clone https://github.com/EverRest/test-app.git`</li>
    <li>1. `cd test-app && cp .env.example .env`, set app key</li>
    <li>2. `docker-compose up -d`</li>
    <li>3. `docker-compose run app composer i`</li>
    <li>4. `docker-compose run app npm i`</li>
    <li>5. `docker-compose run app npm run build`</li>
    <li>6. `docker-compose run app php artisan migrate`</li>
    <li>6a. if you have problem with generating valid app key feel free to use console command `docker-compose run app php artisan key:generate `</li>
</ul>

## Security

Security features:
<ul>
    <li>Used CSRF token on all forms for all non-idempotent requests</li>
    <li>Added strong validation for all forms and fields</li>
    <li>Implemened XSS sanitizer middleware to sanitize user's input</li>
    <li>Added custom validation rule to validate strings with internal spaces</li>
    <li>Added throttling for requests</li>
    <li>Livewire approach is helping to control ui part more better because of SSR for views</li>
    <li>Eloquent ORM is escaping users input for SQL injections and other vulnerabilities</li>
    <li>Escaping displaying data in tags with `{{}}`</li>
    <li>Implemented session authentication for the user</li>
</ul>
