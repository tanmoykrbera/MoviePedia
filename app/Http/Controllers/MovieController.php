<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class MovieController extends Controller
{
    public function index() {
    }
 
    public function listMovie()
    {
        $movielist = DB::table('movies_list')->get();
        return view('movie', ['movielist' => $movielist]);
    }
}