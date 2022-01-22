# Laravel Api Rest Categorie

Celem zadania jest realizacja aplikacji opartej o dowolną wersję Laravela, która będzie spełnia poniższe założenia:

W bazie chcemy przechowywać kategorie w 4 wersjach językowych (PL / EN / DE / FR)
Napisanie migracji do bazy
Napisanie seeder’a wypełniającego bazę kilkoma testowymi kategoriami
REST API:
Endpoint umożliwiający pobranie listy kategorii dla wybranego locale
Endpoint umożliwiający dodanie nowej kategorii (definicja nazwy kategorii dla wymaganych locale)
Napisanie listenera, który w momencie dodania nowej kategorii wyślę notyfikację mailową pod zdefiniowany adres. *wysyłka notyfikacji nie musi być realizowana, pusta metoda notyfikacji w odpowiednim miejscu.
Test: przykładowy test sprawdzający poprawność działania powyższych endpointów.
Readme: opis krok po kroku jak uruchomić aplikację lokalnie, migracje itd.

## Install with Composer

```
    $ curl -s https://github.com/pdurka/Categorie | php
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env
```

## Set the application key

```
   $ php artisan key:generate
```

## Database

Make a database created for this app and add its credentials to the .env file located in the root of the project.

```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
```

## Run migrations

```
   $ php artisan migrate
```

## Run seeds

```
   $ php artisan db:seed --class=CategoriesSeeder
```

## Getting with Curl

```
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/categorie/PL
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X POST -d '[{"country":"PL","name":"Piwa"},{"country":"EN","name":"beer"}]' http://127.0.0.1:8000/api/categorie
```

## Run test

```
   $ php artisan test
```
