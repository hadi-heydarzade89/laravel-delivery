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

    public function update($attributes, $id)
    {
        $delivery = $this->model->where('id', $id)->update($attributes);
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
