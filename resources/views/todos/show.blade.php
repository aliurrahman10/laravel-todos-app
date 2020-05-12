@extends('todos.layout.app')
@section('title', 'todos single item')
@section('main-content')
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h1 class="text-center display-4">Todo Item</h1>
                <div class="card card-default mt-5">
                    <div class="card-header">
                        <!-- <div class="cart-title">Todos</div> -->
                        {{$todo->name}}
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                    </div>
                    
                </div>
                <a href="/todos/{{$todo->id}}/edit" class="btn btn-primary mt-2">Edit</a>
                <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger mt-2">Delete</a>
            </div>
        </div>
@endsection