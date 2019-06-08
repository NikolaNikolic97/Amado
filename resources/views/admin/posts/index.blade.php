@extends('layout.admin')
@section('breadcrumb')
    All posts
@endsection
@section('page_title')
    All posts
@endsection
@section('mainContent')
    @include('partials.admin.posts.posts_table')
@endsection
