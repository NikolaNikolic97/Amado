@extends('layout.admin')
@section('breadcrumb')
    Analitics
@endsection
@section('mainContent')
    <div class="row">
        @include('partials.admin.analitics.itemsSold')
        @include('partials.admin.analitics.totalEarnings')
    </div>
    @include('partials.admin.statistic_chart')
@endsection