<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\BookLanguage;
use App\Http\Resources\V1\BookLanguageResource;
use App\Http\Resources\V1\BookLanguageCollection;
use App\Http\Requests\V1\StoreBookLanguageRequest;
use App\Http\Requests\V1\UpdateBookLanguageRequest;

class BookLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new BookLanguageCollection(BookLanguage::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookLanguageRequest $request)
    {
      return new BookLanguageResource(BookLanguage::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookLanguage  $bookLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(BookLanguage $bookLanguage)
    {
        return new BookLanguageResource($bookLanguage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookLanguageRequest  $request
     * @param  \App\Models\BookLanguage  $bookLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookLanguageRequest $request, BookLanguage $bookLanguage)
    {
        $bookLanguage->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookLanguage  $bookLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookLanguage $bookLanguage)
    {
      $deleteData = $bookLanguage->delete();

      if ($deleteData) {
        return 1;
      } else {
        return 0;
      }
    }
}
