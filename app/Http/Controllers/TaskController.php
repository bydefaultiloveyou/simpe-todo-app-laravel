<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Task::create([
      "list" => $request->list,
      "deskripsi" => $request->deskripsi,
    ]);

    return back();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

    return view('pages.task.edit', [
      "task" => Task::where("id", $id)->first(),
    ]);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    Task::where("id", $id)->update([
      "list" => $request->list,
      "deskripsi" => $request->deskripsi
    ]);

    return redirect('/')->with('success', 'Data berhasil di rubah');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Task  $task
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Task::find($id)->delete();
    return back()->with('success', 'Task berhasil di hapus');
  }
}
