<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\toDoList;
use App\User;

class toDoListsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $users = User::findorfail($user_id);
        
        return view('toDoList.index')->with('toDoLists', $users->toDoLists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toDoList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = request()->validate([
            'title' => 'required',
            'date' => 'required',
            'priority' => 'required',
        ]);

        auth()->user()->toDoLists()->create($data);

        return redirect('/toDoList')->with('success','Task added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user ,$id)
    {
        $toDoList = toDoList::findorfail($id);

        if(auth()->user()->id != $toDoList->user_id){
            return redirect('/toDoList')->with('error','Unauthorized Page');
        }

       // $toDoList = toDoList::findorfail($id);

        return view('toDoList.show',compact('toDoList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user ,$id)
    {
        //$this->authorize('update',$user->toDoLists);

        $toDoList = toDoList::find($id);

        if(auth()->user()->id != $toDoList->user_id){
            return redirect('/toDoList')->with('error','Unauthorized Page');
        }

        return view('toDoList.edit',compact('toDoList'));
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
        

        $data = request()->validate([
            'title' => 'required',
            'date' => 'required',
            'priority' => 'required'
        ]);

        $toDoList = toDoList::find($id);

         $toDoList->title = $data['title'];
         $toDoList->date = $data['date'];
         $toDoList->priority = $data['priority'];

         $toDoList->save();

         //$session = 'Task Updated';
        
       //auth()->user()->toDoLists()->update($data);
        return view('toDoList.show',compact('toDoList'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDoList = toDoList::find($id);

        $toDoList->delete();

        return redirect('/toDoList')->with('error','Task Deleted');
    }
}
