<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Articles\Contract\ArticlesRepository;

final class ArticleReadService
{
    private ArticlesRepository $repository;

    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getArticleById()
    {

    }
}
