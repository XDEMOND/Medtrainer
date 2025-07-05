<?php

// Definición de la interfaz
interface CacheInterface {
        /**
     * Stores data in cache
     * @param string $key Identifier
     * @param mixed $value Data to store
     * @return bool True on success, false on failure
     * @throws CacheException On connection errors
     */
    public function set(string $key, mixed $value): bool;  // Devuelve bool para indicar éxito/fallo
    public function get(string $key): mixed;
}

// Implementación para producción
class MemcacheCache implements CacheInterface {
    private $memcache;
    
    public function __construct() {
        $this->memcache = new Memcache;
        if (!$this->memcache->connect('localhost', 11211)) {
            throw new RuntimeException("Could not connect to Memcache server");
        }
    }
    
    public function set(string $key, mixed $value): bool {
        return $this->memcache->set($key, $value);
    }
    
    public function get(string $key): mixed {
        return $this->memcache->get($key);
    }
}

// Implementación para staging
class ApcCache implements CacheInterface {
    public function set(string $key, mixed $value): bool {
        return apc_store($key, $value);
    }
    
    public function get(string $key): mixed {
        return apc_fetch($key);
    }
}

// Implementación para desarrollo
class NullCache implements CacheInterface {
    public function set(string $key, mixed $value): bool {
        return true;  // Simula éxito siempre
    }
    
    public function get(string $key): mixed {
        return null;
    }
}




