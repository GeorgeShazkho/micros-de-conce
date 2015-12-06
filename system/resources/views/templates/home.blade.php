@extends('layouts.home')

@section('title', 'Micros de Conce 2')

@section('resources')

    <!-- SCRIPTS -->
    {!! Html::script('js/jquery-1.11.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    <!-- STYLES -->
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/base.css') !!}
    {!! Html::style('css/includes/header.css') !!}
    {!! Html::style('css/includes/nav-menu.css') !!}
    {!! Html::style('css/includes/slider.css') !!}
    {!! Html::style('css/includes/boxes.css') !!}
    {!! Html::style('css/includes/footer.css') !!}

    {!! Html::style('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700') !!}

@endsection

@section('content')
    @include('includes.header')
    @include('includes.nav-menu')
    @include('includes.home-form')
    @include('includes.boxes')
    @include('includes.footer')
@endsection