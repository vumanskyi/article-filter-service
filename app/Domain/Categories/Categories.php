<?php
declare(strict_types=1);

namespace App\Domain\Categories;

use App\Domain\Articles\Articles;
use App\Domain\Model;

class Categories extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
