<?php
declare(strict_types=1);

namespace App\Domain\Categories;

use App\Domain\Repository;
use App\Domain\Categories\Contract\CategoriesRepository as BaseRepository;

class CategoriesRepository extends Repository implements BaseRepository
{

}
