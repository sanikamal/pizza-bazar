@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action"><a>View</a></li>
                            <li class="list-group-item list-group-item-action"><a>Add</a></li>
                        </ul>
                    </div>
                </div>

                @if (count($errors) > 0)
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p> {{ $error }}<p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of Pizza</label>
                                <input type="text" class="form-control" name="name" id="name"/>

                            </div>
                            <div class="form-group">
                                <label for="description">Description of Pizza</label>
                                <textarea type="text" class="form-control" name="description"
                                          id="description"> </textarea>

                            </div>
                            <div class="form-inline">
                                <label>Pizza Price(₹)</label>
                                <input type="number" class="form-control" name="small_pizza_price"
                                       placeholder="Small Pizza Price"/>
                                <input type="number" class="form-control" name="medium_pizza_price"
                                       placeholder="Medium Pizza Price"/>
                                <input type="number" class="form-control" name="large_pizza_price"
                                       placeholder="Large Pizza Price"/>


                            </div>
                            <div class="form-group">
                                <label for="category">Category of Pizza</label>
                                <select name="category" id="category" class="form-control">
                                    <option value=""></option>
                                    <option value="vegetarian">Vegetarian Pizza</option>
                                    <option value="non vegetarian">Non Vegetarian Pizza</option>
                                    <option value="traditional">Traditional Pizza</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="image">Image of Pizza</label>
                                <input type="file" class="form-control" name="image"/>

                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Save</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
