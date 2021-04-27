<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreDeliveryRequest;
use App\Repositories\Delivery\DeliveryRepositoryInterface;

class APIDeliveryController extends BaseController
{

    private $deliveryRepository;

    public function __construct(DeliveryRepositoryInterface $deliveryRepository)
    {
        $this->deliveryRepository = $deliveryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->deliveryRepository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreDeliveryRequest $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryRequest $request)
    {
        $this->deliveryRepository->create($request->all());

        return $this->response([
            'status' => true,
            'message' => 'The record is added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->deliveryRepository->find($id);

        return $this->response($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDeliveryRequest $request, $id)
    {
        $this->deliveryRepository->save($request->all(), $id);
        return $this->response([
            'status' => true,
            'message' => 'successful',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deliveryRepository->destroy($id);
        return $this->response([
            'status' => true,
            'message' => 'delivery is deleted',
        ]);
    }
}
