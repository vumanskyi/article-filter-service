<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Spatie\DataTransferObject\DataTransferObject;

abstract class Filter
{
    /**
     * @param DataTransferObject $dto
     * @return Collection
     */
    abstract public function search(DataTransferObject $dto): Collection;
}
