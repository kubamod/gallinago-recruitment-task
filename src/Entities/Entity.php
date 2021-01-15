<?php


namespace kubamod\FreshsalesApiClient\Entities;


abstract class Entity
{
    public array $data;

    public function fromCamelCase(string $input) : string
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }


    public function ToArray(): array
    {
        $publicProperties = get_object_vars($this);

        $path = explode("\\", static::class);
        $className =  array_pop($path);

        foreach ($publicProperties as $key => $value) {
            $this->data[strtolower($className)][$this->fromCamelCase($key)] = $value;
        }
        return $this->data;
    }
}