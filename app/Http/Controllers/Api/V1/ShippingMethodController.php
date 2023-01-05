<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\ShippingMethod;
use App\Http\Requests\V1\StoreShippingMethodRequest;
use App\Http\Requests\V1\UpdateShippingMethodRequest;
use App\Http\Resources\V1\ShippingMethodResource;
use App\Http\Resources\V1\ShippingMethodCollection;

class ShippingMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new ShippingMethodCollection(ShippingMethod::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingMethodRequest $request)
    {
      return new ShippingMethodResource(ShippingMethod::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingMethod $shippingMethod)
    {
        return new ShippingMethodResource($shippingMethod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingMethodRequest  $request
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingMethodRequest $request, ShippingMethod $shippingMethod)
    {
      $shippingMethod->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingMethod  $shippingMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingMethod $shippingMethod)
    {
      $deleteData = $shippingMethod->delete();

      if ($deleteData) {
        return 1;
      } else {
        return 0;
      }
    }
}
