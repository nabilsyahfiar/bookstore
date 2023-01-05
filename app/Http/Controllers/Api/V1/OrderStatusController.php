<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use App\Http\Requests\V1\StoreOrderStatusRequest;
use App\Http\Requests\V1\UpdateOrderStatusRequest;
use App\Http\Resources\V1\OrderStatusResource;
use App\Http\Resources\V1\OrderStatusCollection;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new OrderStatusCollection(OrderStatus::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderStatusRequest $request)
    {
      return new OrderStatusResource(OrderStatus::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function show(OrderStatus $orderStatus)
    {
        return new OrderStatusResource($orderStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderStatusRequest  $request
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderStatusRequest $request, OrderStatus $orderStatus)
    {
      $orderStatus->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderStatus $orderStatus)
    {
      $deleteData = $orderStatus->delete();

      if ($deleteData) {
        return 1;
      } else {
        return 0;
      }
    }
}
