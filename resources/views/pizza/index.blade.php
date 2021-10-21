@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <a class="list-group-item list-group-item-action">View</a>
                            <a class="list-group-item list-group-item-action">Add</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pizza') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" />

                        </div>
                        <div class="form-group">
                            <label for="description">Description of Pizza</label>
                            <textarea type="text" class="form-control" name="description"> </textarea>

                        </div>
                        <div class="form-inline">
                            <label>Pizza Price(₹)</label>
                            <input type="number" class="form-control" name="name" placeholder="Small Pizza Price"/>
                            <input type="number" class="form-control" name="name" placeholder="Medium Pizza Price" />
                            <input type="number" class="form-control" name="name" placeholder="Large Pizza Price"/>


                        </div>
                        <div class="form-group">
                            <label for="category">Category of Pizza</label>
                            <select name="" id="category" class="form-control">
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian Pizza</option>
                                <option value="nonvegetarian">Non Vegetarian Pizza</option>
                                <option value="traditional">Traditional Pizza</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="image">Image of Pizza</label>
                            <input type="file" class="form-control" name="image" />

                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Save</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
