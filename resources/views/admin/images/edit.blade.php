@extends('layout.admin')
@section('breadcrumb')
    Edit image
@endsection
@section('page_title')
    Edit image
@endsection
@section('mainContent')
    @include('partials.admin.images.edit_form')
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
