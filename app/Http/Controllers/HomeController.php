<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class HomeController extends Controller
{
    public function index() {
    }
 
    public function Home()
    {
        $listMovie = DB::table('movies_list')->get();
        $tvshow = DB::table('tv_shows')->get();
        return view('home', ['listMovie' => $listMovie],['tvshow' => $tvshow]);
    }
    public function searchMovie(Request $request)
    {
        $search_movie = $request['value'];
        $listMovie = DB::table('movies_list')->where('movie_name',$search_movie)->first();
        echo json_encode($listMovie, true);
    }
}

