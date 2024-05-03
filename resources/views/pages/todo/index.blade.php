@extends('layouts.app')
@section('content')
    <div class=" container">
        <div class=" row">
            <div class=" col-lg-12 text-center">
                <h1 class="page-title">Todo page</h1>
            </div>
        </div>
        <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" row">
                <div class=" col-lg-8 ">
                    <input type="text" name="title" class="form-control" placeholder="Enter Task">
                </div>
                <div class=" col-lg-4">
                    <div class=" items-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class=" container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key => $task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->title }}</td>
                        <td>
                            @if ($task->done == 0)
                                <span class=" badge bg-warning">Not Completed</span>
                            @else
                                <span class=" badge bg-success">Completed</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('todo.delete',$task->id) }}" class=" btn btn-danger btn-sm">Delete</a>
                            <a href="{{ route('todo.done',$task->id) }}" class=" btn btn-success btn-sm">Done</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            font-size: 50px;
            font-weight: bold;
            color: #0cff49;
        }
    </style>
@endpush
