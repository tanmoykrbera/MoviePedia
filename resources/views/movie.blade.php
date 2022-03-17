@include('header')
 
<div class="container">
   <h5 class="text-white top-head mt-4 ">Movies on MoviePedia</h5><br>
   <div class="row mt-3" id="homePage">
      @foreach($movielist as $row)  
       <div class="col-sm-2 mt-5" id="movieList" >
         <div class="Imgbox">  
          <a href="/tvShow"><img src="images/{{ $row->movie_path }}" style="width:170px"></a> 
         </div>
        </div>    
      @endforeach
   </div>     
   <div class="row" >
       <div class="col-sm-2 mt-5 text-white">
         <div class="Imgbox" id="showSearch">  
           
         </div>
        </div>    
   </div>     
</div>
@include('footer')