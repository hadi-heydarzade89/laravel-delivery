<?php


namespace App\Repositories\Delivery;


interface DeliveryRepositoryInterface
{
    public function all();

    public function update($attributes, $id);

    public function destroy($id);
}
