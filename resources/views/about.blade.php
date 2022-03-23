@extends('layouts.master')
@section('title')
G&D Smart - Nosotros
@endsection
@section('header')
    @include('components.header')
@endsection
@section('content')
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('components\img\nuestra-tienda.jpg')}}" alt="...">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Mision, Vision... y algo mas</span>
                            <span class="section-heading-lower">Compromiso con la Tecnologia</span>
                        </h2>
                        <p>Nuestra Mision es: ...  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At possimus tenetur dolores a recusandae, ducimus eius excepturi mollitia nobis dolorem animi necessitatibus quam corporis. Earum vero eligendi aperiam unde veniam.</p>
                        <p class="mb-0">
                        At possimus tenetur dolores a recusandae,
                        <em>lust</em>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quia ipsum ipsam iure tenetur rerum cum, eveniet, at deleniti necessitatibus porro recusandae veritatis itaque tempora magnam enim et autem unde.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
