@extends('todos.layout.app')
@section('title', 'todos')
@section('main-content')
<div class="row justify-content-center">
            <div class="col-md-8">
            <h1 class="text-center display-4">Todos</h1>
                <div class="card card-default mt-5">
                    <div class="card-header">
                        <!-- <div class="cart-title">Todos</div> -->
                        Todo items
                        @if(session()->has('message'))
                        <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
                        @endif  
                    </div>
                    <div class="card-body">
                    @unless(count($todos) > 0)
                        <p>Todo is empty</p>
                    @endunless
                    <ul class="list-group">
                        @foreach($todos as $todo)
                        <li class="list-group-item" @if($todo->completed == 1) style="text-decoration: line-through;" @endif>{{$todo->name}}
                           @if($todo->completed == 0)
                            <a href="/todos/{{$todo->id}}/completed" class="btn btn-warning btn-sm float-right ml-1">completed</a>
                           @endif
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">view</a>
                           
                        </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
 @endsection       