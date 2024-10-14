<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Laravel\Eloquent\Filter\PartialSearchFilter;
use ApiPlatform\Metadata\QueryParameter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource(
    operations: [
        new Put(allowCreate: true),
        new GetCollection(),
        new Get()
    ],
    paginationItemsPerPage: 5
)]
#[QueryParameter(key: 'title', filter: PartialSearchFilter::class)]
class Animal extends Model
{
    use HasFactory;
}
