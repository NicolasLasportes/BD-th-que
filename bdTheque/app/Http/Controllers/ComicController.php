<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\comic;

class ComicController extends Controller
{
    public function getAllComicsOrderedByDESC()
    {
        $comic = comic::all()->sortByDESC("created_at");
        $array = json_decode(json_encode($comic), true);
        $array = array_values($array);
        $array = json_encode($array);
        echo $array;        
    }

    public function displayThisComic($id)
    {
        if(isset($id))
        {
            $thisComic = comic::where('comic_id', $id)->get();
            echo json_encode($thisComic);
        }
    }
}