<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Mixed_;

class BaseRepository implements BaseRepositoryInterface
{

    /**
     * @var Model
     */
    protected $model;


    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }


}
