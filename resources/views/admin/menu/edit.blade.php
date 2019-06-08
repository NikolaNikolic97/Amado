@extends('layout.admin')
@section('breadcrumb')
    Edit menu
@endsection
@section('page_title')
    Edit menu
@endsection
@section('mainContent')
    @include('partials.admin.menu.edit_form')
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
