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


}