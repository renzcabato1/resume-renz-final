
@extends('layouts.app')

@section('content')
<section class="resume-section" id='history'>
    <div class="row">
        <div class="col-lg-6">
            <h2 class="section-title">EDUCATION</h2>
            <ul class="time-line">
                @foreach($educations as $educ)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{date('F Y',strtotime($educ->date_from))}} - {{date('F Y',strtotime($educ->date_to))}}</span>
                        <h6 class="time-line-item-title">{{$educ->school}}</h6>
                        <p class="time-line-item-subtitle">{{$educ->course}}</p>
                        <p class="time-line-item-content">{{$educ->school_address}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-6">
            <h2 class="section-title">EXPERIENCE</h2>
            <ul class="time-line">
                @foreach($experiences as $experience)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{date('F d Y',strtotime($experience->from))}} - @if($experience->to == null) <span>Present</span> @else {{date('F d Y',strtotime($experience->to))}} @endif</span>
                        <h6 class="time-line-item-title">{{$experience->position}}</h6>
                        <p class="time-line-item-subtitle">{{$experience->company}}</p>
                        <p class="time-line-item-content"><small>{!! nl2br(e($experience->description)) !!}</small></p>
                    </li>
                @endforeach
             
              
            </ul>
        </div>
    </div>
</section>
@endsection