<?php
declare(strict_types=1);

namespace App\Http\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class SearchDTO extends DataTransferObject
{
    public string $articleName = '';

    public array $categories = [];

    public array $tags = [];
}
