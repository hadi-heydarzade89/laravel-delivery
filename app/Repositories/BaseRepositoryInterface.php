<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function create(array $attributes);

    public function find($id);
}
