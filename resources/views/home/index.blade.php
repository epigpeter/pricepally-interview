@extends('layouts.master')

@section('content')
    @include('shared.hero')

    @include('shared.food-categories', ['categories' => $item_categories?? []])

    @include('shared.food-items-web', ['categories' => $item_categories?? []])
    @include('shared.food-items-mobile', ['categories' => $item_categories?? []])

    @include('shared.partners')

    @include('shared.download-apps')

@endsection

@section('scripts')
    <script src="{{ asset('assets') }}/js/ajax-script.js"></script>
@endsection
