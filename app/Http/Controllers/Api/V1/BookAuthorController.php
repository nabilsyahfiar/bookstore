<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\BookAuthor;
use App\Http\Resources\V1\BookAuthorResource;
use App\Http\Resources\V1\BookAuthorCollection;
use App\Http\Requests\V1\StoreBookAuthorRequest;
use App\Http\Requests\V1\UpdateBookAuthorRequest;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new BookAuthorCollection(BookAuthor::all());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookAuthorRequest $request)
    {
      return new BookAuthorResource(BookAuthor::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function show(BookAuthor $bookAuthor)
    {
      return new BookAuthorResource($bookAuthor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookAuthorRequest  $request
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookAuthorRequest $request, BookAuthor $bookAuthor)
    {
      $bookAuthor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAuthor $bookAuthor)
    {
      $deleteData = $bookAuthor->delete();

      if ($deleteData) {
        return 1;
      } else {
        return 0;
      }
    }
}
