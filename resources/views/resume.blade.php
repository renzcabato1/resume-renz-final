@extends('layouts.app')

@section('content')
<section class="services-section">
    <h2 class="section-title">SERVICES</h2>
    <div class="row">
        @foreach($services as $service)
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="services/{{$service->name}}.png" alt="target">
            </div>
            <div class="media-body">
                <h5 class="service-title">{{$service->name}}</h5>
         
            </div>
        </div>
        @endforeach
       
    </div>
</section>
<section class="services-skills">
    <h2 class="section-title">SKILLS</h2>
    
    <div class="row">
    @foreach($skillTypes as $skillTypes)
    <div class="col-md-4">
    <h4 ><small>{{$skillTypes->name}}</small></h4>
        <div class="row">
            @foreach($skillTypes->skills as $skill)
            <div class="col-md-3">
                <div class="media service-card d-flex  justify-content-center">
                    <div class="service-icons text-center">
                        <img src="skillss/{{$skill->tool}}.png" alt="target" class='' title='{{$skill->tool}}'> 
                        <br>
                        <span class='text-center'>{{$skill->tool}}</span>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
    </div>
    <br>
 
</section>
<section class="services-portfolio">
    <h2 class="section-title">Latest Projects</h2>
    <div class="row">
        <div class='col-md-12'>
            <input class="form-control" id="Search" onkeyup="myFunction()" width='100%;' type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>
    <br>
    <div class="row blog-posts-wrapper">
        @foreach($projects as $project)
            <div class="col-md-4  text-center target">
                <a href="#"  data-toggle="modal" data-target="#data_{{$project->id}}">
                    <img src="projects/{{$project->id}}/1.png" alt="news 1" class="blog-post-thumbnail border">
                    <h5 class="blog-post-title ">{{$project->project_title}}</h5>
                </a>
                <p class=" text-center">
                    <span class="post-published-date">{{$project->type}}</span>
                </p>
            </div>
            
@include('image_modal')
        @endforeach
    </div>
</section>
<style>
    .d:hover {
  background-color: #94b8b8;
}
</style>

<script>
    
    function myFunction() {
       var input = document.getElementById("Search");
       var filter = input.value.toLowerCase();
       var nodes = document.getElementsByClassName('target');
       
       for (i = 0; i < nodes.length; i++) {
           if (nodes[i].innerText.toLowerCase().includes(filter)) {
               nodes[i].style.display = "";
           } else {
               nodes[i].style.display = "none";
           }
       }
   }
 </script>


@endsection