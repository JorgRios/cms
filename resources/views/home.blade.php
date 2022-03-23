@extends('layouts.master')
@section('title')
G&D Smart - Inicio
@endsection
@section('header')
    @include('components.header')
@endsection
@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('components\img\iphone.webp')}}" alt="...">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Tecnología de comunicacion</span>
                    <span class="section-heading-lower">Al alcance de tus manos</span>
                </h2>
                <p class="mb-3">Nuestra tienda de venta de quipos tecnologicos de comunicacion se encuentra bajo la banguardia de actualizacion y servicios para toda la clientela</p>
                <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visitanos ahora!</a></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Nuestro Compomiso</span>
                        <span class="section-heading-lower">Para ti</span>
                    </h2>
                    <p class="mb-0">La empresa G&D ingresa al mercado nacional digital con los productos que ofrece mediante el uso de una plataforma web la cual mostrará toda la información corporativa y comercial.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
