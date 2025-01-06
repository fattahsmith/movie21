<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $api_key = env('MOVIE_DB_API_KEY');
        $MAX_BANNER = 3;
        $MAX_MOVIE_ITEM = 10;
        $MAX_TV_SHOWS_ITEM = 10;

        $bannerResponse = Http::get("{$baseURL}/trending/movie/week", [
            'api_key' => $api_key
        ]);

        //prepare variable
        $bannerArray = [];

        //check API response
        if ($bannerResponse->successful()) {
            //check data nulll apa tidak
            $resultArray = $bannerResponse->object()->results;

            if (isset($resultArray)) {
                //looping data
                foreach ($resultArray as $item) {
                    array_push($bannerArray, $item);

                    if (count($bannerArray) == $MAX_BANNER) {
                        break;
                    }
                }
            }
        }
           //API top 10 movies
        $topMoviesResponse = Http::get("{$baseURL}/movie/top_rated", [
            'api_key' => $api_key
        ]);

        //prepare variable
        $topMoviesArray = [];

        //check API response
        if ($topMoviesResponse->successful()) {
            //check data nulll apa tidak
            $resultArray = $topMoviesResponse->object()->results;

            if (isset($resultArray)) {
                //looping data
                foreach ($resultArray as $item) {
                    array_push($topMoviesArray, $item);

                    if (count($topMoviesArray) == $MAX_TV_SHOWS_ITEM) {
                        break;
                    }
        }
    }
}


        //API top 10 movies
        $topTVShowResponse = Http::get("{$baseURL}/tv/top_rated", [
            'api_key' => $api_key
        ]);



        //prepare variable
        $topTVShowArray = [];

        //check API response
        if ($topTVShowResponse->successful()) {
            //check data nulll apa tidak
            $resultArray = $topTVShowResponse->object()->results;

            if (isset($resultArray)) {
                //looping data
                foreach ($resultArray as $item) {
                    array_push($topTVShowArray, $item);

                    if (count($topTVShowArray) == $MAX_TV_SHOWS_ITEM) {
                        break;
                    }
                }
            }
        }

        // dd(get_defined_vars());

        return view('home', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'api_key' => $api_key,
            'banner' => $bannerArray,
            'topMovies' => $topMoviesArray, // pastikan semua elemen ditutup dengan benar\
            'topTVShow' => $topTVShowArray
        ]);

    }

    public function movies(){

        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $sortBy = "popularity.desc";
        $page = 1;
        $minimalVoter = 100;

        $MoviesResponse =  HTTP::get("{$baseURL}/discover/movie",[
            'api_key' => $apiKey,
            'sort_by' => $sortBy,
            'vote_count.gte' => $minimalVoter,
            'page' => $page
        ]);

        $movieArray = [];

          if ($MoviesResponse->successful()) {
            //check data nulll apa tidak
            $resultArray = $MoviesResponse->object()->results;

            if (isset($resultArray)) {
                //looping data
                foreach ($resultArray as $item) {
                    array_push($movieArray, $item);
                    }
                }
            }

        return view('movie', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'api_Key' => $apiKey,
            'movies' => $movieArray,
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter
        ]);
    }



    public function tvShow()
    {

        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $sortBy = "popularity.desc";
        $page = 1;
        $minimalVoter = 100;

        $tvResponse =  HTTP::get("{$baseURL}/discover/tv", [
            'api_key' => $apiKey,
            'sort_by' => $sortBy,
            'vote_count.gte' => $minimalVoter,
            'page' => $page
        ]);

        $tvArray = [];

        if ($tvResponse->successful()) {
            //check data nulll apa tidak
            $resultArray = $tvResponse->object()->results;

            if (isset($resultArray)) {
                //looping data
                foreach ($resultArray as $item) {
                    array_push($tvArray, $item);
                }
            }
        }

        return view('tvShow', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'api_Key' => $apiKey,
            'tvShow' => $tvArray,
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter
        ]);
    }

    public function search(){
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');

            return view('search', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'api_Key' => $apiKey,
            ]);
}

       public function movieDetails($id) {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $api_Key = env('MOVIE_DB_API_KEY');

        $response = Http::get("{$baseURL}/movie/{$id}",[
            'api_Key' => $api_Key,
            'append_to_response' => 'videos'
        ]);


        $movieData = null;

        if ($response->successful()) {
            $movieData = $response->object();
    }

    return view('movie_details', [
        'baseURL' => $baseURL,
        'imageBaseURL' => $imageBaseURL,
        'api_Key' => $api_Key,
        'movieData' => $movieData,
    ]);
    }
}
