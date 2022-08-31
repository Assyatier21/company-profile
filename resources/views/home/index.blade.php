@extends('layouts.master')
@section('title', 'Assyatier Company')

@section('css')
@endsection

@section('content')

@include('home.hero.index')
@include('home.clients.index')
@include('home.about-us.index')
@include('home.counts.index')

@endsection
