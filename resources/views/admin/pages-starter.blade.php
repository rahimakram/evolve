@extends('admin.layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Starter Page @endslot
    @endcomponent

@endsection
