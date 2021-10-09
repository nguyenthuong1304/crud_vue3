<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CompanyRepositoryInterface
{
    /**
     * Get all
     * @return Collection
     */
    public function getList(): Collection;
}
