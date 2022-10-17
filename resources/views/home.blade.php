@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('category.create')}}" class="btn btn-success">Cateroy</a>
                    <a href="{{route('post.create')}}" class="btn btn-success">Post</a>
                </div>
                <p>Total Post ={{$data['post']}}</p>
                <p>Total Category ={{$data['cat']}}</p>

            </div>

        </div>
    </div>
</div>
@endsection
