@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Task List</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add New Task</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body">

        @if($tasks->count() > 0)
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $key => $task)
                <tr class="text-center">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if($task->completed)
                            <span class="badge bg-success">Done</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @else
        <h5 class="text-center text-muted p-3">No tasks found.</h5>
        @endif

    </div>
</div>
@endsection
