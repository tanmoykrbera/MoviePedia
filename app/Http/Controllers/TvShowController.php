<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class TvShowController extends Controller
{
    public function index() 
    {
    }
    public function listTvShow()
    {
        $tvshowlist = DB::table('tv_shows')->get();
        return view('tvshows', ['tvshowlist' => $tvshowlist]);
    }
    public function searchTvShow(Request $request)
    {
        $search_tvshow = $request['value'];
        $listTvshow = DB::table('tv_shows')->where('tvshow_name',$search_tvshow)->first();
        echo json_encode($listTvshow, true);
    }
}