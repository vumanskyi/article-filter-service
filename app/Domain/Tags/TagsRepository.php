<?php
declare(strict_types=1);

namespace App\Domain\Tags;

use App\Domain\Repository;
use App\Domain\Tags\Contract\TagsRepository as BaseRepository;

class TagsRepository extends Repository implements BaseRepository
{

}
