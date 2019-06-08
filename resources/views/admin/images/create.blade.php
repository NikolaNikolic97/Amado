@extends('layout.admin')
@section('breadcrumb')
    Insert image
@endsection
@section('page_title')
    Insert image
@endsection
@section('mainContent')
    @include('partials.admin.images.insert_form')
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
