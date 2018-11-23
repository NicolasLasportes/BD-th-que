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
        $comic = comic::all()->sortByDESC("created_at");
        $array = json_decode(json_encode($comic), true);
        $array = array_values($array);
        $array = json_encode($array);
        echo $array;        
    }
}