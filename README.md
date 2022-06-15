# Laravel OMDb API Wrapper

## Introduction
A Laravel integration of [PHP wrapper for OMDb API](https://github.com/rooxie/omdb-php).

## Installation
Install [`omdb-laravel`](http://packagist.org/packages/rooxie/omdb-laravel) using [Composer](https://getcomposer.org/).
```bash
composer require rooxie/omdb-laravel
```

## Quickstart
*Add OMDb API key to your `.env` file*
```dotenv
OMDB_API_KEY=xxxxxxx
```

#### Use OMDb as a facade
```php
use Rooxie\Laravel\Facades\OMDb;

OMDb::getByImdbId('tt0110912');
OMDb::getByTitle('harry potter', 'movie', 2004);
OMDb::search('arrival', 'movie', 2016, 1);
```

#### Use from Laravel Service Container
```php
use Rooxie\OMDb;

class UserController extends Controller
{
    public function show(OMDb $omdb, string $imdbId)
    {
         return view('user.profile', [
            'movie' => $omdb->getByImdbId($imdbId),
        ]);
    }
}
```

## Documentation

Read the full documentation [here](https://github.com/rooxie/omdb-php/blob/master/README.md).