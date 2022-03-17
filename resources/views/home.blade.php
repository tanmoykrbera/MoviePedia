@include('header')
 
<div class="container">
   <h4 class="text-white top-head mt-4 Movie_List "><b>Popular Movies On MoviePedia</b></h4><br/>
   <div class="row" id="homePage">
      @foreach($listMovie as $row)  
       <div class="col-sm-2 mt-5" id="movieList" >
         <div class="Imgbox">  
          <a href="/tvShow"><img src="images/{{ $row->movie_path }}" style="width:170px"></a> 
         </div>
        </div>    
      @endforeach
   </div>    
</div>
 
<div class="container">
   <h4 class="text-white top-head mt-5 tv_list" ><b>Popular TV Show On MoviePedia</b></h4><br/>
   <div class="row mt-5 mb-4" id="tvpage">
      @foreach($tvshow as $row)  
       <div class="col-sm-2 mt-5" id="movieList" >
         <div class="Imgbox">  
          <a href="/tvShow"><img src="images/{{ $row->tvshow_path }}" style="width:170px"></a> 
         </div>
        </div>    
      @endforeach
   </div> 
</div>
 
   <div class="row" >
       <div class="col-sm-2 mt-5 text-white">
         <div class="Imgbox" id="showSearch">  
           
         </div>
        </div>    
   </div>     
</div>
@include('footer')
 