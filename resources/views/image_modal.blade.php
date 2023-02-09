<div class="modal fade" id="data_{{$project->id}}" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            <h5 class="modal-title text-center" id="title_{{$project->id}}">{{$project->project_title}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleCaptions{{$project->id}}" class="carousel slide border" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($project->images as $key => $image)
                            <li data-target="#carouselExampleCaptions{{$project->id}}" data-slide-to="{{$key}}" @if($key == 0) class="active" @endif></li>
                        @endforeach
                     
                    </ol>
                    <div class="carousel-inner">
                        @foreach($project->images as $key => $image)
                        <div class="carousel-item @if($key == 0) active @endif">
                            <img src="projects/{{$project->id}}/{{$key+1}}.png" class="d-block w-100 " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev d" style='border:0px;' type="button" data-target="#carouselExampleCaptions{{$project->id}}" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next d" style='border:0px;'  type="button" data-target="#carouselExampleCaptions{{$project->id}}" data-slide="next">
                      <span class="carousel-control-next-icon" style='border:none;' aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </button>
                  </div>
                  <h4>
                    <small>{!! nl2br(e($project->project_description)) !!}</small>
                  </h4>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>