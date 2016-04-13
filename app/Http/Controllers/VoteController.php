<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Vote;
use App\Question;
use Auth;
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $answerid)
    {
        $question = Question::findOrFail($id);
        $answer = Answer::findOrFail($answerid);
        $answers = $question->answers()->get();
        $input = $request->all();
        if((Vote::where('user_id', '=', Auth::user()->id)
                 ->where('answer_id', '=', $answer->id)
                 ->exists()) && (Auth::user()->id = $answer->user_id))
        {
            Session::flash('error', 'You have already voted for this answer');
        }
        else{
            $vote = new Vote(array(
                'note' => $input['note'],
                'answer_id' => $answer->id,
                'user_id' => Auth::user()->id
            ));
            $vote->save();
            if((Vote::where('answer_id', '=', $answer->id)->count('user_id')) <> 0){
                $answer->note_average = Vote::where('answer_id', '=', $answer->id)->sum('note') / Vote::where('answer_id', '=', $answer->id)->count('user_id');
                $answer->save();
            }
        }
        //return view('question.show', compact('question', 'answers'));
        return redirect()->route('question.show', [$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
