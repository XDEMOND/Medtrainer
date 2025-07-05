<?php


// To create an instance for Diferents implements of enviroments of caché
class CacheFactory {
    public static function create(string $env): CacheInterface {
        return match ($env) {
            'production' => new MemcacheCache(),
            'staging'    => new ApcCache(),
            'development' => new NullCache()
        };
    }
}

