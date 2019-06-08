@extends('layout.admin')
@section('breadcrumb')
    Edit user
@endsection
@section('page_title')
    Edit user
@endsection
@section('mainContent')
    @include('partials.admin.users.edit_form')
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
