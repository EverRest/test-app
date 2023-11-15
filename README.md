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
    <li>MYSQL=8</li>
    <li>Implemented `compose.yml` for development with `php`,`mysql`, `nginx` configuration files</li>
    <li>Web UI implemented as SPA with <a href="https://livewire.laravel.com">Laravel Livewire</a></li>
    <li>Views was scaffolded and implemented via <a href="https://laravel.com/docs/10.x/starter-kits#breeze-and-livewire">Laravel Breeze</li>
</ul>

## Set Up

You must have docker installed on your local machine to run application with `compose.yml` or `MYSQL8` and `PHP8.1` as well if you dont. Please check the list of installation steps. I described the case when you are using docker-compose.

Step by step:
<ul>
    <li>0. `git clone https://github.com/EverRest/test-app.git`</li>
    <li>1. `cd test-app && cp .env.example .env`, set `APP_KEY`. Supported ciphers are: aes-128-cbc, aes-256-cbc, aes-128-gcm, aes-256-gcm</li>
    <li>2. `docker-compose up -d`</li>
    <li>3. `docker-compose run app composer i`</li>
    <li>3a. `docker-compose run app php artisan key:generate` if you want to generate `APP_KEY` from scratch</li>
    <li>4. `docker-compose run app npm i`</li>
    <li>5. `docker-compose run app npm run build`</li>
    <li>6. `docker-compose run app php artisan migrate`</li>
</ul>

## Security

Security features:
<ul>
    <li>Used CSRF token on all forms for all non-idempotent requests</li>
    <li>Added strong validation for all forms and fields</li>
    <li>Implemened XSS sanitizer middleware to sanitize user's input</li>
    <li>Added custom validation rule to validate strings with internal spaces</li>
    <li>Added throttling for user's requests</li>
    <li>Livewire approach is helping us to control UI more effectively because of SSR for all components</li>
    <li>Eloquent ORM is escaping users input for SQL injections and other vulnerabilities</li>
    <li>Escaping displaying data on view for tags with `{{}}`</li>
    <li>Implemented session authentication for the user</li>
</ul>
