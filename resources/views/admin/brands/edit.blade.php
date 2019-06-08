@extends('layout.admin')
@section('breadcrumb')
    Edit brand
@endsection
@section('page_title')
    Edit brand
@endsection
@section('mainContent')
    @include('partials.admin.brands.edit_form')
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
