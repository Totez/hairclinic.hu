@extends('layouts.app')
@section('content')

	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>

    <section id="hariclinic">

        <div id="product-nav" class="container-fluid position-fixed vh-100 d-none d-md-block">
            <div class="row h-100 align-items-center position-relative">
                <div class="col-5 h-100 position-absolute loaded-white-bg"></div>
                <div class="col-12">
                    <div class="container">
                        <div class="row" id="product-nav-content">
                            <div class="col-2 my-auto p-0">
                                <nav class="nav product-submenu">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="d-block scroll-to-element nav-link text-dark text-menu triggerFadeIn" href="#" data-target="info">Ismertető</a>
                                            <a class="d-block scroll-to-element nav-link text-dark text-menu triggerFadeIn" href="#" data-target="ingredients">Hatóanyagok</a>
                                            <a class="d-block scroll-to-element nav-link text-dark text-menu triggerFadeIn" href="#" data-target="dosage">Adagolás</a>
                                            <a class="d-block scroll-to-element nav-link text-dark text-menu triggerFadeIn" href="#" data-target="buying">Vásárlás</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <img class="w-100 triggerFadeIn" src="{{ asset("images/packshot-hairclinic-extra.png") }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">

                <div class="col-12 col-md-5 offset-md-7" id="info">
                    <div class="row" style="height:33vh">
                        <div class="col-12">
                            <div class="hc-product-title" style="margin-top:11vh;">
                                <h4 class="brand-name triggerFadeIn">HairClinic</h4>
                                <h1 class="product-type triggerFadeIn">Extra</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <img src="{{ asset('images/illustration.png') }}" class="product-image triggerFadeIn">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-md-10">
                            <p class="my-5 text-green text-lg pt-5 triggerFadeIn" style="font-style: italic;">
                                {!! $page_contents["hairclinic_extra"]["description"]["content"] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-7 py-5" id="ingredients">

                    <h3 class="py-5">Hatóanyagok</h3>

                    @foreach($page_contents["hairclinic_extra"]["ingredients"] as $value)
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <div class="hc-collapse">
                                    <div data-toggle="collapse" href="#ingredientsCollapse-{{ $loop->index }}" role="button" aria-expanded="false" aria-controls="ingredientsCollapse-{{ $loop->index }}">
                                        <div class="row py-3 px-3 title">
                                            <div class="col-10 text-md">
                                                {!! $value["title"] !!}
                                            </div>
                                            <div class="col-2 text-right">
                                                <img src="{{ asset("images/plus.svg") }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse hc-collapse-content fadeIn" id="ingredientsCollapse-{{ $loop->index }}">
                                        <div class="content m-0 pb-3 pt-2 px-3 text-green text-md">
                                            {!! $value["content"] !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-12 col-md-5 offset-md-7" id="dosage">
                    <div class="content d-flex align-items-center row">
                        <div class="col-12 col-md-6">
                            <p class="text-xl">
                                {!! $page_contents["hairclinic_extra"]["dosage"]["content"] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="buying" class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 offset-md-7 align-items-center content">
                        <div style="margin:5rem 0;">
                            <div class="row small text-green" style="margin-bottom:76px;">
                                <div class="col-1 d-flex justify-content-center" style="flex: 0 0 25px; max-width: 25px;">
                                    <img class="inline-block" src="{{ asset("images/green-buy.svg") }}" style="width:25px;">
                                </div>
                                <div class="col">
                                    <span class="inline-block text-sm" style="width:200px;">Egy kattintás, és megvásárolhatod <br> a kedvenc online drogériádban</span>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 col-md-10">
{{--                                    <h6 class="text-green mt-5 font-weight-light" style="margin-bottom:35px;">30 kapszula</h6>--}}

                                    {{-- rossmann --}}
                                    <a href="{{ $products["rossmann_hc_extra"]["url"] }}" target="blank">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-rossmann.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span class="text-md text-dark">{{ number_format($products["rossmann_hc_extra"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                            @if($products["rossmann_hc_extra"]["is_outdated"])
                                                <span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $products["rossmann_hc_extra"]["updated_at"]->format("Y-m-d") }}</span>
                                            @endif
                                        </div>
                                    </a>

                                    {{-- dm --}}
                                    <a href="{{ $products["dm_hc_extra"]["url"] }}" target="blank" style="text-decoration: none;">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-drogerie-markt.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span class="text-md text-dark">{{ number_format($products["dm_hc_extra"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                            @if($products["dm_hc_extra"]["is_outdated"])
                                                <span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $products["dm_hc_extra"]["updated_at"]->format("Y-m-d") }}</span>
                                            @endif
                                        </div>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
