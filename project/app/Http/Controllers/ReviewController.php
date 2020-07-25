<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Resources\ReviewResource;
use App\Http\Resources\ReviewResourceCollection;

class ReviewController extends Controller
{
    /*
    * @param Review $review
    * @return ReviewResource
    */
    public function show(Review $getreview): ReviewResource
    {
        return new ReviewResource($getreview);
    }

    /*
    *   @return ReviewResourceCollection
    */
    public function index(): ReviewResourceCollection
    {
        return new ReviewResourceCollection(Review::paginate());
    }

    /*
    * @param Request $request
    * @return ReviewResource
    */
    public function store(Request $request)
    {
        $request->validate([
            'idMovie' => 'required',
            'idUser'  => 'required',
            'rating'  => 'required',
            'review'  => 'required',
        ]);

        $review = Review::create($request->all());

        return new ReviewResource($review);
    }

    /*
    *   @param Review $review
    *   @param Request $request
    *   @return ReviewResource
    */
    public function update(Review $review, Request $request): ReviewResource
    {

        $review->update($request->all());

        return new ReviewResource($review);
    }

    /*
    *   @param Review $review
    *   @return \Illuminate\Http\JsonResponse
    *   @throws \Exception
    */
    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json();
    }
}
