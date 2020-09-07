<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Pagination\AbstractPaginator;
use Spatie\DataTransferObject\DataTransferObject;

abstract class Filter
{
    /**
     * @param DataTransferObject $dto
     * @return AbstractPaginator
     */
    abstract public function search(DataTransferObject $dto): AbstractPaginator;
}
