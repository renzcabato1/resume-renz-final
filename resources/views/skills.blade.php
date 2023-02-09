@extends('layouts.app')

@section('content')

<section class="services-skills">
    <h2 class="section-title">SKILLS</h2>
    @foreach($skillTypes as $skillTypes)
    <h4 >{{$skillTypes->name}}</h4>
    <div class="row">
        @foreach($skillTypes->skills as $skill)
            <div class="media service-card col-lg-1 d-flex  justify-content-center">
                
             
                <div class="service-icons text-center">
                  
                    <img src="skillss/{{$skill->tool}}.png" alt="target" class='' title='{{$skill->tool}}'> 
                    <br>
                    <span class='text-center'>{{$skill->tool}}</span>
                    
                </div>
            </div>
        @endforeach
    </div>
    <br>
    @endforeach
 
</section>
@endsection