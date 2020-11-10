<?php


namespace App\Entity;
use App\Services\transform;


class Capitalize implements transform
{
    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", 'hello world');
    }


}