@extends('layout.admin')
@section('breadcrumb')
    All images
@endsection
@section('page_title')
    All images
@endsection
@section('mainContent')
    @include('partials.admin.images.images_table')
@endsection