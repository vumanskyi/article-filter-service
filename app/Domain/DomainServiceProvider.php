<?php
declare(strict_types=1);

namespace App\Domain;

use App\Domain\Articles\Articles;
use App\Domain\Articles\ArticlesRepository;
use App\Domain\Articles\Contract\ArticlesRepository as BaseArticlesRepository;
use App\Domain\Categories\Categories;
use App\Domain\Categories\CategoriesRepository;
use App\Domain\Categories\Contract\CategoriesRepository as BaseCategoriesRepository;
use App\Domain\Tags\Contract\TagsRepository as BaseTagsRepository;
use App\Domain\Tags\Tags;
use App\Domain\Tags\TagsRepository;
use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseArticlesRepository::class, fn () => new ArticlesRepository(new Articles()));
        $this->app->bind(BaseCategoriesRepository::class, fn () => new CategoriesRepository(new Categories()));
        $this->app->bind(BaseTagsRepository::class, fn () => new TagsRepository(new Tags()));
    }
}
