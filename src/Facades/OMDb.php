<?php

namespace Rooxie\Laravel\Facades;

/**
 * @method static \Rooxie\Model\Movie getByImdbId(string $imdbId)
 * @method static \Rooxie\Model\Movie getByTitle(string $title, string $type = '', int $year = 0)
 * @method static array search(string $title, string $type = '', int $year = 0, int $page = 1)
 *
 * @see \Rooxie\OMDb
 */
class OMDb extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    public static function getFacadeAccessor()
    {
        return \Rooxie\OMDb::class;
    }
}