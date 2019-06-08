@extends('layout.admin')
@section('breadcrumb')
    Insert into menu
@endsection
@section('page_title')
    Insert into menu
@endsection
@section('mainContent')
    @include('partials.admin.menu.insert_form')
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
