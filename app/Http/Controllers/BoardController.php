<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Models\Board;
use App\Http\Models\User;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardList = Board::paginate(5);
        // $page = Board::paginate(5);
        return view('board.index', compact('boardList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userName = Session::get('userName');
        if (!isset($userName))
        {
            return redirect("/user/login");
        }
    
        return view('board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userName = Session::get('userName');
        if (!isset($userName))
        {
            return redirect("/user/login");
        }
    
        if($request->input('okOrCancel') == 'n') {
            return redirect("/board");
        }

        $board = new Board();
        $board->time = $request->time;
        $board->title = $request->title;
        $board->content = $request->content;
        $board->top = 1;
        $board->save();

        Session::flash('flash_success_message', '新增成功!! ');

        return redirect("/board");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board = Board::find($id);
        $board->time = substr(date("c",strtotime($board->time)), 0, -6);
        return view('board.show', compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userName = Session::get('userName');
        if (!isset($userName))
        {
            return redirect("/user/login");
        }
    
        $board = Board::find($id);
        $board->time = substr(date("c",strtotime($board->time)), 0, -6);
        return view('board.edit', compact('board'));
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
        $userName = Session::get('userName');
        if (!isset($userName))
        {
            return redirect("/user/login");
        }

        if($request->input('okOrCancel') == 'n') {
            return redirect("/board");
        }

        $board = Board::find($id);
        $board->time = $request->time;
        $board->title = $request->title;
        $board->content = $request->content;
        $board->save();

        Session::flash('flash_success_message', '更新成功!! ');

        return redirect("/board");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userName = Session::get('userName');
        if (!isset($userName))
        {
            return redirect("/user/login");
        }

        $board = Board::find($id);
        $board->delete();

        Session::flash('flash_success_message', '刪除成功!! ');

        return redirect("/board");
    }
}
