<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\ApiResource\Cat;
use App\Models\Animal as AnimalModel;

final class CatProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        $animal = AnimalModel::find($uriVariables['id']);

        return new Cat(
            id: $animal->id,
            name: $animal->name,
            age: $animal->age
        );
    }
}