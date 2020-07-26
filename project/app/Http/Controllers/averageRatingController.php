<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class averageRatingController extends Controller
{
    public function movie($movie_id)
    {
        $results = DB::select('select r.idMovie, m.movie movieTitle, avg(r.rating) averageRating from reviews r, movies m  where r.idMovie = ?',[$movie_id]);

        return $results;
    }

    public function user($user_id)
    {
        $results = DB::select('select r.idUser, u.username, avg(r.rating) averageRating from reviews r, users u where r.idUser = ?', [$user_id]);

        return $results;
    }
}
