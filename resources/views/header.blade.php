<link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
 
<body style="background-color:#232323">
<header>
    <nav class="navbar navbar-expand-lg"   id="navbarNav">
    <a id="logo" href={{url('/')}}><img src="https://raw.githubusercontent.com/tanmoykrbera/django-assignments/main/new%20logo%20now%20(1).png" alt="Logo Image"/></a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse ml-5">
      <a href={{url('/')}} class="mr-3">Home</a>
      <a href={{url('movie')}} class=" mr-3">Movies</a>
      <a href={{url('tv-show')}}  class="mr-3">TV Shows</a>
       <div class="ml-4 mt-2">
          <input name="searchName"  type="text" id="search" className="text-white"  placeholder="Search Movies"  style="background:black,borderRadius:22px"/>
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"> 
          <button type="button" id="submit" class="btn btn-dark mb-1" style="color: #fff;
          background-color: #000000;"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
     </div>
      <div class="dropdown">
        <span><i class="fas fa-cog  text-white"></i></span>
        <div class="dropdown-content toggle">
          <h6>Theme Color</h6>
          <a href="#" class="mt-4">
            <button id="blackTh" style="background-color: rgb(20, 20, 20); width: 50px; height: 20px"></button>
            <button id="whiteTh" style="background-color: rgb(136, 136, 136); width: 50px; height: 20px"></button>
          </a>
        </div>
      </div>
    
</nav>
</header>
<body>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
 <script>
   // Code to search Movie Name 
   $(document).ready(function(){
    $('#submit').click(function(){
       var searchValue = $('#search').val();    
       var token = $('#token').val();
       $.ajax({
          type: "POST", 
          url:'/searchMovie',
          data:{value:searchValue,_token: "{{ csrf_token() }}" },
          dataType:'json',
          success:function(response)
          {
           var output = "<h6 style='color:white;margin-left:50px;margint-bottom:20px;'>"+response.movie_name+"</h6><a href='/tvShow'><img src='images/"+response.movie_path+"' style='width:400px;margin-left:50px'></a>";
            $('#homePage').css('display','none');
            $('#tvpage').css('display','none');
            $('.Movie_List').css('display','none');
            $('.tv_list').css('display','none');
            $('#showSearch').html(output);
          }
       });
    });
   });

   // $(document).ready(function(){
   //  $('#tv_show').click(function(){
   //   $(location).attr('href','tvShow');
   //  });
   // });

   // Code to search TV Show 

   $(document).ready(function(){
    $('#submit').click(function(){
       var searchValue = $('#search').val();    
       var token = $('#token').val();

       $.ajax({
          type: "POST", 
          url:'/searchTvShow',
          data:{value:searchValue,_token: "{{ csrf_token() }}" },
          dataType:'json',
          success:function(response)
          {
           var output = "<h6 style='color:white;margin-left:50px'>"+response.movie_name+"</h6><a href='/tvShow'><img src='images/"+response.tvshow_path+"' style='width:400px;margin-left:50px'></a>";
            $('#homePage').css('display','none');
            $('.Movie_List').css('display','none');
            $('.tv_list').css('display','none');
            $('#showSearch').html(output);
          }
       });
    });
   });

   // Theme Color Change 

    $('#blackTh').click(function() {
       $('body').css('background','#232323');
   });
    $('#whiteTh').click(function() {
      $('body').css('background','#a2a2a2');
   });
 </script>  