@extends('layout.admin')
@section('breadcrumb')
    Insert user
@endsection
@section('page_title')
    Insert user
@endsection
@section('mainContent')
    @include('partials.admin.users.inser_form')
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
