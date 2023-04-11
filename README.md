## Installation
Шаг 1: скачать с GitHub проект [MIT](https://github.com/vattgern/job-2-with-danil)___
Шаг 2: распаковать проект в папку domains___
Шаг 3: запустить OpenServer___
Шаг 4: открыть консоль OpenServer (находится во вкладке дополнительно)___
Шаг 5: в phpmyadmin создать базу данных с названием laravel (если такая база существует, то за место php artisan migrate --seed писать php artisan migrate:fresh --seed )___
Шаг 6: переименовать файл в .env ___
Шаг 7: прописать команды по очередно___
```bash
cd domains
cd job-2-with-danil
composer install
php artisan storage:link
php artisan migrate --seed 
php artisan serve
```
