<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\OrderHistory;
use App\Http\Requests\V1\StoreOrderHistoryRequest;
use App\Http\Requests\V1\UpdateOrderHistoryRequest;
use App\Http\Resources\V1\OrderHistoryResource;
use App\Http\Resources\V1\OrderHistoryCollection;

class OrderHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new OrderHistoryCollection(OrderHistory::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderHistoryRequest $request)
    {
      return new OrderHistoryResource(OrderHistory::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function show(OrderHistory $orderHistory)
    {
        return new OrderHistoryResource($orderHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderHistoryRequest  $request
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderHistoryRequest $request, OrderHistory $orderHistory)
    {
      $orderHistory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderHistory $orderHistory)
    {
      $deleteData = $orderHistory->delete();

      if ($deleteData) {
        return 1;
      } else {
        return 0;
      }
    }
}
