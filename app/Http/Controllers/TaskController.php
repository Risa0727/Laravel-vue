<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
  public function index() {

    return Task::all();
  }
  public function show(Task $task) {
    // URLパラメータで受け取ったタスクモデルを
    // そのままreturnするだけです。
    // ※これでLaravelが勝手にjson形式のレスポンスを返却します
    return $task;
  }
}
