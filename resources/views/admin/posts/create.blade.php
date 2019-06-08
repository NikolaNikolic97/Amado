@extends('layout.admin')
@section('breadcrumb')
    Insert post
@endsection
@section('page_title')
    Insert post
@endsection
@section('mainContent')
    @include('partials.admin.posts.insert_form')
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
