@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-info fw-bold text-center">
        Edit Task
    </div>

    <div class="card-body">

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Task Title</label>
                <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Completed</label>
                <select name="completed" class="form-control">
                    <option value="0" {{ $task->completed ? '' : 'selected' }}>Pending</option>
                    <option value="1" {{ $task->completed ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <button class="btn btn-primary">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </form>

    </div>
</div>
@endsection
