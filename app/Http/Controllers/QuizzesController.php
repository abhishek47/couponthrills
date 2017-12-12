<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quiz;
use App\Models\QuizQuestion;

class QuizzesController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $quizzes = Quiz::latest();
        $level = 0;
        if($request->has('level')) 
        {
             $quizzes->where('level', $request->get('level')-1);
             $level = $request->get('level');

        }

        $quizzes = $quizzes->paginate(20); 

        return view('quiz.index', compact('quizzes', 'level'));
    }



  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        return view('quiz.show', compact('quiz'));
    }

     /**
     * Display the random quiz.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $count = Quiz::count();
        
        $quiz = null;
        
        while($quiz == null){
          $rid = rand(1, $count);
          $quiz = Quiz::find($rid);
         }
        
        return view('quiz.show', compact('quiz'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result(Quiz $quiz)
    {
         if(\Auth::user()->solvedQuizzes->contains($quiz)){
               $answers = unserialize(\Auth::user()->solvedQuizzes()->where('quiz_id', $quiz->id)->first()->pivot->answers);
               $points = \Auth::user()->solvedQuizzes()->where('quiz_id', $quiz->id)->first()->pivot->points;
                $correct = 0;
                $wrong = 0;
               foreach ($quiz->questions as $key => $question) {
                   if(array_key_exists($question->id, $answers)) 
                   {
                       if($question->answer == $answers[$question->id])
                       {
                         $correct++;
                       } else {
                        $wrong++;
                       }
                    } else {
                        $answers[$question->id] = 8;
                        $wrong++;
                    }   
               } 

               return view('quiz.result', compact('quiz' ,'answers', 'points', 'correct', 'wrong'));
        }
         else {
                session()->flash('flash_title', "You have to solve this quiz yet!");
            session()->flash('flash_message', 'You will have to solve this quiz to analyse your answers!');  
            return redirect('/quiz/' . $quiz->id);
         }
      
    }

    
}
