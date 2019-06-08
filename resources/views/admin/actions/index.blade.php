@extends('layout.admin')
@section('breadcrumb')
    Actions of Users
@endsection
@section('page_title')
    Actions of Users
@endsection
@section('mainContent')
    @include('partials.admin.actions.actions_table')
@endsection