<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\Get;
use App\State\CatProvider;

#[Get(uriTemplate: '/cats/{id}', provider: CatProvider::class)]
class Cat
{
    public function __construct(public string $id, public string $name, public int $age) {}
}