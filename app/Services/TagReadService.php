<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Tags\Contract\TagsRepository;

final class TagReadService
{
    private TagsRepository $repository;

    /**
     * TagReadService constructor.
     * @param TagsRepository $repository
     */
    public function __construct(TagsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function availableTags()
    {
        $filter = [
            ['tags.active', '=', 1]
        ];

        return $this->repository->findAll($filter);
    }
}
