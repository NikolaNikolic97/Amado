@extends('layout.admin')
@section('breadcrumb')
    Update Categories
@endsection
@section('page_title')
    Update Categories
@endsection
@section('mainContent')
    @include('partials.admin.categories.edit_form')
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