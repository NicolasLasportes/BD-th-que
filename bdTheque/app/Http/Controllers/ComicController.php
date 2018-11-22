<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\comic;

class ComicController extends Controller
{
    // public function getAllComics()
    // {
    //     $comic = comic::all();
    //     echo json_encode($comic);
    // }

    public function getAllComicsOrderedByAsc()
    {
        $comic = comic::all()->sortBy("created_at");
        echo json_encode($comic);
    }
}