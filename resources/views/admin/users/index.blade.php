@extends('layout.admin')
@section('breadcrumb')
    All users
@endsection
@section('page_title')
    All users
@endsection
@section('mainContent')
@include('partials.admin.users.users_table')
@endsection
