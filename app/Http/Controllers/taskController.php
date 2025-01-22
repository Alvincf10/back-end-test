<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function getAllTask() {
        return response()->json(task::all(), 200);
    }

    public function store (Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:pending,in progress,completed',
            'user_id' => 'required',
        ]);

        $task = task::create($validated);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id) {
        $task = task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        $task->update($validated);

        return response()->json($task, 201);
    }

    public function delete($id) {
        $task = task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $task->delete();
        return response()->json(['message' => 'success delete'], 200);
    }
}