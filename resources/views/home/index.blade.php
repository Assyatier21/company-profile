@extends('layouts.master')
@section('title', 'XL Axiata')

@section('css')
@endsection

@section('content')

@include('home.hero.index')
@include('home.clients.index')
@include('home.about-us.index')
@include('home.counts.index')
@include('home.services.index')
@include('home.testimonials.index')
@include('home.pricing.index')
@include('home.contact-us.index')

@endsection
