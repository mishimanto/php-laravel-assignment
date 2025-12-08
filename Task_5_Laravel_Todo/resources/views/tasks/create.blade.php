@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white fw-bold text-center">
        Create New Task
    </div>

    <div class="card-body">

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Task Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <button class="btn btn-success">Save Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </form>

    </div>
</div>
@endsection
