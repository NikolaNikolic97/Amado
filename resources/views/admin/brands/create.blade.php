@extends('layout.admin')
@section('breadcrumb')
    Insert brand
@endsection
@section('page_title')
    Insert brand
@endsection
@section('mainContent')
    @include('partials.admin.brands.insert_form')
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
