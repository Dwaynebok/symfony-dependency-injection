<?php


namespace App\Entity;


use App\Services\transform;


class Spaces implements transform
{
    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
        str_replace(' ', '-', $string);
    }


}