<?php

namespace App\Http\Controllers;
use App\Information;
use App\Education;
use App\Hobby;
use App\SkillType;
use App\Service;
use App\Project;
use App\ProjectImage;
use App\Experience;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //

    public function home()
    {
        $information = Information::first();
        return view('welcome',
        array(
            'header' => 'home',
            'information' => $information,
        ));
    }
    public function resume()
    {
        $projects = Project::with('images')->get();
        $information = Information::first();
        $educations = Education::orderBy('id','desc')->get();
        $hobbies = Hobby::get();
        $skillTypes = SkillType::with('skills')->get();
        $services = Service::get();
        return view('resume',
        array(
            'header' => 'resume',
            'information' => $information,
            'hobbies' => $hobbies,
            'educations' => $educations,
            'skillTypes' => $skillTypes,
            'services' => $services,
            'projects' => $projects,
        ));
    }
    public function history()
    {
        $educations = Education::orderBy('id','desc')->get();
        $experiences = Experience::orderBy('id','desc')->get();
        $information = Information::first();
        $skillTypes = SkillType::with('skills')->get();
        $hobbies = Hobby::get();
        return view('history',
        array(
            'header' => 'history',
            'information' => $information,
            'hobbies' => $hobbies,
            'educations' => $educations,
            'experiences' => $experiences,
        ));
    }
    public function skills()
    {
        $information = Information::first();
        $skillTypes = SkillType::with('skills')->get();
        $hobbies = Hobby::get();
        return view('skills',
        array(
            'header' => 'skills',
            'information' => $information,
            'hobbies' => $hobbies,
            'skillTypes' => $skillTypes,
        ));
    }
    public function portfolio()
    {
    
        $information = Information::first();
        $hobbies = Hobby::get();
        $projects = Project::with('images')->get();
        // dd($projects);
        return view('portfolio',
        array(
            'header' => 'portfolio',
            'information' => $information,
            'hobbies' => $hobbies,
            'projects' => $projects,
        ));
    }
}
