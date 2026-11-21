@extends('layouts.app')

@section('title', 'Create Course')

@section('content')
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        @include('course._form', ['course' => new \App\Models\Course()]) 
        <button type="submit" class="btn">Create Course</button>
        <a href="{{ route('courses.index') }}">Cancel</a>
    </form>
@endsection
