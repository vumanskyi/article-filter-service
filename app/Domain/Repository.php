<?php
declare(strict_types=1);

namespace App\Domain;

abstract class Repository
{
    protected Model $model;

    /**
     * Repository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}
