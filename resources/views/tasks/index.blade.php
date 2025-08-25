@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><img class="logo-img" src="{{ URL('images/logo.png') }}" alt="logo"></h2>
        <a href="{{ route('tasks.create') }}" class="add-btn">Add New Task</a>
    </div>

    <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="input task name or description..." value="{{ request('search') }}">
            <button class="btn search-btn" type="submit">Search</button>
            @if(request('search'))
                <a href="{{ route('tasks.index') }}" class="btn btn-outline-dark fw-bold">Clear</a>
            @endif
        </div>
    </form>

    @if ($tasks->isEmpty())
        <div class="alert alert-info">No tasks found.</div>
    @else
        <div class="table-responsive mytask-table">
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr class="first-tr">
                        <th>Task Name</th>
                        <th>Task Description</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>{{ Str::limit($task->description, 50) }}</td>
                            <td>{{ $task->due_date ? $task->due_date->format('M d, Y') : 'N/A' }}</td>
                            <td>
                                @if ($task->completed)
                                    <span class="badge bg-success bg-gradient py-2 px-4 shadow">Done</span>
                                @else
                                    <span class="badge bg-warning text-dark bg-gradient py-2 px-3 shadow">Waitting</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary fw-bold me-2 bg-gradient py-1 px-2 shadow">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger bg-gradient fw-bold p-1 shadow" onclick="return confirm('Are you sure you want delete this task?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $tasks->links() }} {{-- Pagination links --}}
        </div>
    @endif
@endsection