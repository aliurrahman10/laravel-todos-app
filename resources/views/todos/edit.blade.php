@extends('todos.layout.app')
@section('title', 'todos')
@section('main-content')
<div class="row justify-content-center">
            <div class="col-md-8">
            <h1 class="text-center display-4">Edit Todo Page</h1>
                <div class="card card-default mt-5">
                    <div class="card-header">
                        <!-- <div class="cart-title">Todos</div> -->
                        Edit todo
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif                      
                        <form action="/update-todo/{{$todo->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="" value="{{$todo->name}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description">{{$todo->description}}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit"  class="btn btn-primary">Update Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
 @endsection       