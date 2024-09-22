
# Ma famille

This <b>TallStack</b> application is build using :

<ul>
    <li><a href="https://laravel.com/" target="_blank">Laravel</a> 11</li>
    <li><a href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</a> 5 (featuring <a href="https://jetstream.laravel.com/features/teams.html" target="_blank">Teams</a>)</li>
    <li><a href="https://livewire.laravel.com/" target="_blank">Livewire</a> 3</li>
    <li><a href="https://alpinejs.dev/" target="_blank">Alpine.js</a> 3</li>
    <li><a href="https://tailwindcss.com/" target="_blank">Tailwind CSS</a></li>
    <li><a href="https://tallstackui.com//" target="_blank">TallStackUI</a> (featuring <a href="https://tabler.io/icons" target="_blank">Tabler Icons</a>)</li>
    <li><a href="https://filamentphp.com//" target="_blank">Laravel Filament</a> 3 (only <a href="https://filamentphp.com/docs/3.x/tables/installation" target="_blank">Table Builder</a>)</li>
</ul>

### Requirements

<ul>
    <li>
        At least <a href="https://www.php.net/" target="_blank">PHP</a> 8.3, supporting Laravel 11.<br/>
    </li>
    <li>
        At least <a href="https://www.mysql.com/" target="_blank">MySQL</a> 8.0.1 or <a href="https://mariadb.com/" target="_blank">MariaDB</a> 10.2.2 or an equivalent database, supporting <a href="https://dev.mysql.com/doc/refman/8.0/en/with.html" target="_blank">Recursive Common Table Expressions</a>.
    </li>
</ul>


## Installation

`cp .env.example .env`

make the needed changes regarding name, url, database connection & mail server

`composer install`

`php artisan key:generate`

`php artisan storage:link`

`php artisan migrate:fresh --seed`

`npm install & npm run build`

`php artisan serve` or `npm run dev`
