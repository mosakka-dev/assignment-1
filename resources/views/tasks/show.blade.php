@extends('layouts.app')

@section('content')
    <h2>Task Details</h2>

    <div class="card">
        <div class="card-header">
            <h4>{{ $task->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $task->description ?? 'N/A' }}</p>
            <p><strong>Due Date:</strong> {{ $task->due_date ? $task->due_date->format('M d, Y') : 'N/A' }}</p>
            <p><strong>Status:</strong>
                @if ($task->completed)
                    <span class="badge bg-success">Completed</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </p>
            <p><strong>Created At:</strong> {{ $task->created_at->format('M d, Y H:i A') }}</p>
            <p><strong>Last Updated:</strong> {{ $task->updated_at->format('M d, Y H:i A') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection