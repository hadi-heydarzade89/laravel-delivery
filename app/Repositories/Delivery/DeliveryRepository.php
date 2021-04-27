<?php


namespace App\Repositories\Delivery;


use App\Models\Delivery;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class DeliveryRepository extends BaseRepository implements DeliveryRepositoryInterface
{
    /**
     * DeliveryRepository constructor.
     *
     * @param Delivery $model
     */
    public function __construct(Delivery $model)
    {
        parent::__construct($model);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    public function save($attributes, $id)
    {
        $delivery = $this->model->where('id', $id)->first();
        $delivery->title = $attributes['title'];
        $delivery->date_time = $attributes['date_time'];
        $delivery->save();
    }

    public function destroy($id)
    {
        try {
            $this->model->where('id', $id)->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
