<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Resources\MovieResource;
use App\Http\Resources\MovieResourceCollection;

class MovieController extends Controller
{
    /*
    * @param Movie $movie
    * @return MovieResource
    */
    public function show(Movie $getmovie): MovieResource
    {
        return new MovieResource($getmovie);
    }

    /*
    *   @return MovieResourceCollection
    */
    public function index(): MovieResourceCollection
    {
        return new MovieResourceCollection(Movie::paginate());
    }

    /*
    * @param Request $request
    * @return MovieResource
    */
    public function store(Request $request)
    {
        $request->validate([
            'movie' => 'required',
        ]);

        $movie = Movie::create($request->all());

        return new MovieResource($movie);
    }

    /*
    *   @param Movie $movie
    *   @return \Illuminate\Http\JsonResponse
    *   @throws \Exception
    */
    public function destroy(Movie $deleteMovie)
    {

        $deleteMovie->delete();

        printf("\n\nThe following movie was deleted: \n\n");
        print($deleteMovie);

        return response()->json();
    }

}
