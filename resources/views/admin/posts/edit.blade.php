@extends('layout.admin')
@section('breadcrumb')
    Edit post
@endsection
@section('page_title')
    Edit post
@endsection
@section('mainContent')
    @include('partials.admin.posts.edit_form')
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
