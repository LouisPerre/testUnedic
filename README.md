How to install the project :
```php
git clone the project
Go to the .env file, copy and paste it, rename it to .env.local
Replace the user, password and db name for your usage
run the command : composer install
bin/console doctrine:database:create
bin/console doctrine:make:migration
bin/console doctrine:fixtures:load
Launch the server : symfony server:start
```