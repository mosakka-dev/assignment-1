@extends('layouts.app')

@section('content')
    <h2 class="m-auto text-center my-2"><img class="logo-img" src="{{ URL('images/logo.png') }}" alt="logo"></h2>
    <h2 class="main-tittle">Add New Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST" class="p-3 rounded shadow my-4 w-75 m-auto">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label fw-bold px-2 text-muted">Task Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="due_date" class="form-label fw-bold px-2 text-muted">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold px-2 text-muted">Task Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" {{ old('completed') ? 'checked' : '' }}>
            <label class="form-check-label fw-bold px-2 text-muted" for="completed ">Completed</label>
        </div>
        <button type="submit" class="btn btn-success btn-gradient fw-bold shadow">Add Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-dark btn-gradient fw-bold shadow">back</a>
    </form>
@endsection