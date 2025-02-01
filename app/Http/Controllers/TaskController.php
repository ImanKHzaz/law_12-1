<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create(Request $request)
    {
        $lawsuitId = $request->query('lawsuit_id'); // استخراج معرف القضية من الرابط
        return view('tasks.create', compact('lawsuitId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'lawsuit_id' => 'required|integer|exists:lawsuits,id',
        ]);

        Task::create([
            'lawsuit_id' => $request->input('lawsuit_id'),
            'user_id' => Auth::id(),
            'task_name' => $request->input('task_name'),
            'description' => $request->input('description'),
        ]);

        // إعادة توجيه المستخدم إلى صفحة عرض القضية المرتبطة
        return redirect()->route('lawsuits.show', $request->input('lawsuit_id'))
            ->with('success', 'تم إنشاء المهمة بنجاح.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'required|boolean',
        ]);

        $task = Task::findOrFail($id);
        $task->update([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'is_completed' => $request->is_completed,
            'user_id' => $request->is_completed ? Auth::id() : null,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
