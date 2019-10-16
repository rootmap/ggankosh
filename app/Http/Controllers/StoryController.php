<?php

namespace App\Http\Controllers;

use DB;
use App\Score;
use App\Story;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StoryController extends Controller
{
    public function getIndex($category)
    {
        $stories = Story::all()->where('category', '=', $category);
        return view('story.index')->with('stories', $stories);
    }

    public function getSingle($id)
    {
        $story = Story::find($id);
        $questions = Question::all()->where('story_id', '=', $id);
        return view('story.single')->with('story', $story)->with('questions', $questions);
    }

    public function postResult(Request $request)
    {
        dd($request);
        // $answer = $request->answer;
       // $true_answer = $request->true_answer;
        //dd($true_answer[1]);
        // $msisdn = "01135404743";
        // if ($answer == $true_answer) 
        // {
        //     $insert = Score::where('msisdn', $msisdn)->increment('score');
        //     if($insert == 0)
        //     {
        //         Score::create(array('msisdn' => $msisdn, 'score' => 0));
        //         return Redirect::back()->with('success_message', 'Score Added Successfully');
        //     }   
        // }

        // $notification = array(
        //     'message' => 'Post created successfully!',
        //     'alert-type' => 'success'
        // );
        
        // return Redirect::to('/')->with($notification);
    }
}
