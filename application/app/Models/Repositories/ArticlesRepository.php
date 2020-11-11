<?php


namespace App\Models\Repositories;


use Illuminate\Database\Eloquent\Collection;

interface ArticlesRepository
{
    /**
     * @param string|string $query
     * @return Collection
     */
    public function search(string $query = ''): Collection;
}
