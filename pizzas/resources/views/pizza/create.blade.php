@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>

                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    <form action="{{ route('pizza.store') }}" method="post" enctype="multipart/form-data">@csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of pizzza</label>
                                <input type="text" class="form-control" name="name" placeholder="name of pizza">
                            </div>
                            <div class="form-group">
                                <label for="description">Description of pizzza</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>



                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
