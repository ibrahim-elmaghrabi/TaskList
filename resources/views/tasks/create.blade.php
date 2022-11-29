@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                 @if(Session::has('status'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
                  @endif
            </div>
            <div class="card">
                <div class="card-header">Task</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="name">Task</label>
                                <input type="text" name="name" id="name" class="form-control" />
                                @error('name')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Description</label>
                                <input type="text" name="body" id="body" class="form-control" />
                            </div>
                             <div class="form-group mt-2">
                                 <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
</div>
@endsection
