@extends('layouts.master')
@section('title')
Tienda G&D Smart - Productos
@endsection
@section('header')
    @include('components.header')
@endsection
@section('content')
<div class="row">
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">Xiaomi </span>
                            <span class="section-heading-lower"> MI 9T PRO</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('components\smarts\mi-9t-pro.jpg')}}" alt="...">
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sit doloremque, deleniti eum obcaecati rerum saepe neque, deserunt, debitis exercitationem eius pariatur ipsa quod nisi laborum dicta animi nobis autem.</p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex me-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">Xiaomi </span>
                            <span class="section-heading-lower"> MI A1</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('components\smarts\mi-a1.jpg')}}" alt="...">
                <div class="product-item-description d-flex ms-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi quas mollitia eum perferendis neque dolorem doloribus minus dignissimos quae alias corrupti, eligendi optio laboriosam error dolores. Doloribus maxime non explicabo?.</p></div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
