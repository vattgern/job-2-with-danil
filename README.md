## Installation
Шаг 1: скачать с GitHub проект [MIT](https://github.com/vattgern/job-2-with-danil)

Шаг 2: распаковать проект в папку domains

Шаг 3: запустить OpenServer

Шаг 4: открыть консоль OpenServer (находится во вкладке дополнительно)

Шаг 5: в phpmyadmin создать базу данных с названием laravel (если такая база существует, то за место php artisan migrate --seed писать php artisan migrate:fresh --seed )

Шаг 6: переименовать файл в .env 

Шаг 7: прописать команды по очередно

```bash
cd domains
cd job-2-with-danil
composer install
php artisan storage:link
php artisan migrate --seed 
php artisan serve
```
