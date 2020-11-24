#Install laravel
---
<ol>
    <li>Laravel: https://laravel.com/docs/8.x/installation</li>
    <li>config .env file -> databse connection</li>
    <li>Nova (via Composer): https://nova.laravel.com/docs/3.0/installation.html#installing-nova-via-composer</li>
    <li>Command: php artisan nova:install</li>
    <li>Command: php artisan migrate</li>
    <li>Config: app.php -> check if App\Providers\NovaServiceProvider::class is added to the service providers</li>
    <li>Command: make user -> php artisan nova:user</li>
</ol>

#Install front-end
---  
<ol>
    <li>Tall stack: Tailwind, Alpine, Laravel and Livewire -> composer require livewire/livewire laravel-frontend-presets/tall</li>
</ol>
