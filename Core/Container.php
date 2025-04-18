<?php 

namespace Core;

class Container 
{
    protected $bindings = [];

    public function bind($key, $function)
    {
        $this->bindings[$key] = $function;
    }
    
    public function resolve($key)
    {
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching finding found for {$key}");
        }

        return call_user_func($this->bindings[$key]);
    }

}