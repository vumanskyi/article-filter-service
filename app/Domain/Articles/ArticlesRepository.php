<?php
declare(strict_types=1);

namespace App\Domain\Articles;

use App\Domain\Repository;
use App\Domain\Articles\Contract\ArticlesRepository as BaseRepository;

class ArticlesRepository extends Repository implements BaseRepository
{

}
