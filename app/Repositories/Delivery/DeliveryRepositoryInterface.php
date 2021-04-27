<?php


namespace App\Repositories\Delivery;


interface DeliveryRepositoryInterface
{
    public function all();

    public function save($attributes, $id);

    public function destroy($id);
}
