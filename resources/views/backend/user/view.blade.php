@extends('layouts.app')
@section('title')
   User| View
@endsection
@section('content')
{{--    <div class="col-sm-6 col-md-9 col-lg-9">--}}
{{--        <div class="card card-primary">--}}

{{--            <div class="card-header">--}}
{{--                <h3 class="card-title">{{$title}}--}}
{{--                    <a href="{{route($route .'index')}}" class="btn btn-success">List</a>--}}
{{--                </h3>--}}
{{--            </div>--}}
{{--            <table class="table-bordered">--}}
{{--                <tr>--}}
{{--                    <td>Name</td>--}}
{{--                    <td>{{$data['row']->name}}</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Email</td>--}}
{{--                    <td>{{$data['row']->email}}</td>--}}
{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td>Status</td>--}}
{{--                    <td>@if($data['row']->status == 1)--}}
{{--                        <p class="text-success">Active</p>--}}
{{--                        @else--}}
{{--                            <p class="text-danger">De-Active</p>--}}
{{--                        @endif--}}
{{--                        </td>--}}
{{--                </tr>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}






<h1>(belongsToMany) relationship</h1>
<div class="container">
    <h2>Student name: {{ $studentData->name }}</h2><hr>
    <p><b>Enrolled subects:</b></p>
{{--    @foreach($studentData->subjects as $subject)--}}
{{--        <p>{{ $subject->subject_name }}</p>--}}
{{--    @endforeach--}}
</div>
@endsection
