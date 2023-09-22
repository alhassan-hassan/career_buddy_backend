## directories we will be mainly working with

`/app/Models` : where models are created
`/app/Http/Controllers` : where controllers are created
`/routes/api` : where api routes are created
`/database/migrations` : where migrations live
`.env` : configurations for stuff like database connection details

## commands to create code templates

`php artisan make:model Apple`
this will create a php file in `/app/Models/` called `Apple.php` with the class definition like this...

```
class Apple..
```

`php artisan make:controller AppleController`
this will create a php file in `/app/Http/Controllers` called `AppleCOntroller.php` with the class definition like this...

```
class AppleController extends Controller..
```

`php artisan make:migration create_apple_table`
this will create a php file in `/databse/migrations` called `create_apple_table.php` (prepended with some other stuff) with the class definition like this...

## Things we will be working with more

1. migrations (this is like git for databases; we need this) helpful links below

https://laravel.com/docs/9.x/migrations
https://laravel.com/docs/9.x/migrations#creating-columns
[net ninja explains migration](https://www.youtube.com/watch?v=074AQVmvvdg&list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q&index=13)
[net ninja migration important precautions](https://www.youtube.com/watch?v=1Zyr-xi4bPk&list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q&index=14)

2. middlewares

3. authentication(token authentication)

4. authorization(roles -- admin, cpa, student)
