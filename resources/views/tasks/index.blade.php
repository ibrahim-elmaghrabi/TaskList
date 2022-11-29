@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p class="text-center">Task List</p></div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Description</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                      @foreach ($tasks as $key =>  $task )
                                    <tr>
                                            <th>{{ $key + 1  }}</th>
                                            <td>{{ $task->name }} </td>
                                            <td>{{ $task->body }} </td>
                                            <td>
                                                <form action="{{ route('tasks.destroy' , ['task' => $task->id]) }}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                    </tr>
                                      @endforeach
                                 
                            </tbody>
                            </table>
                     </div>
            </div>
        </div>
    </div>
</div>
@endsection
