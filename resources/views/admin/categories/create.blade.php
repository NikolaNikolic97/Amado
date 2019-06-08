@extends('layout.admin')
@section('breadcrumb')
    Insert Categories
@endsection
@section('page_title')
    Insert Categories
@endsection
@section('mainContent')
    @include('partials.admin.categories.insert_form')
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