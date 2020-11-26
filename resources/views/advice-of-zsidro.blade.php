@extends('layouts.app')
@section('content')



	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>
	
	<section is="advice-of-zsidro">

		<div class="container">

			<div class="row">

				<div class="col-11 col-md-8 bg-white mx-auto py-5 position-relative" style="margin-top:250px;padding-bottom:100px;margin-bottom:200px;">

                    <div class="row align-items-center">
                    	<div class="col-6">
                    		<p class="text-green text-sm" style="padding:3rem 7rem 3rem 7rem">
                    			{!! $page_contents["advice"]['headline']['content'] !!}
                    		</p>
                    	</div>
                    	<div class="col-6">
                            <img src="{{ asset($page_images["advice"]["headline"]["path"]) }}" alt="{{ $page_images["advice"]["headline"]["name"] }}" style="width:397px;margin-top:-400px;">
                    	</div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom:50px;">
                    	<div class="offset-6 col-6" style="height:200px;">
                			<span class="text-left" style="font-size:67.3px;margin-right:-150px;line-height: 1.2;position:absolute;display: block;font-weight:400;padding-left:7px;">
		                        {!! $page_contents["advice"]["description"]["content"] !!}
                			</span>
                    	</div>
                    </div>
                    
                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-4">
                            <img src="{{ asset($page_images["advice"]["advice"]["a1"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a1"]["name"] }}" style="width:123%;max-width:397px;max-height:397px;object-fit:contain;margin-left:-200px;">
                        </div>
                        <div class="col-8">
                            <h3 class="mb-4" style="padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a1"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a1"]['content'] }}
                            </p>
                            
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-7">
                            <h3 class="mb-4" style="padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a2"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a2"]['content'] }}
                            </p>
                        </div>
                        <div class="col-5 text-left pl-5">
                            <img src="{{ asset($page_images["advice"]["advice"]["a2"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a2"]["name"] }}" style="width:100%;max-width:397px;max-height:397px;object-fit:contain;">
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-5">
                            <img src="{{ asset($page_images["advice"]["advice"]["a3"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a3"]["name"] }}" style="width:123%;max-width:480px;max-height:480px;object-fit:contain;margin-left:-160px;">
                        </div>
                        <div class="col-7">
                            <h3 class="mb-4" style="padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a3"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a3"]['content'] }}
                            </p>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-8">
                            <h3 class="mb-4" style="padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a4"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a4"]['content'] }}
                            </p>
                        </div>
                        <div class="col-4 text-right">
                            <img src="{{ asset($page_images["advice"]["advice"]["a4"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a4"]["name"] }}" style="width:123%;max-width:397px;max-height:397px;object-fit:contain;margin-right:-200px;">
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-5">
                            <img src="{{ asset($page_images["advice"]["advice"]["a5"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a5"]["name"] }}" style="width:100%;max-width:397px;max-height:397px;object-fit:contain;">
                        </div>
                        <div class="col-7">
                            <h3 class="mb-4" style="padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a5"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a5"]['content'] }}
                            </p>
                            
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-8">
                            <h3 class="mb-4" style="padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a6"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a6"]['content'] }}
                            </p>
                        </div>
                        <div class="col-4 text-right">
                            <img src="{{ asset($page_images["advice"]["advice"]["a6"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a6"]["name"] }}" style="width:123%;max-width:397px;max-height:397px;object-fit:contain;margin-right:-200px;">
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col-5">
                            <img src="{{ asset($page_images["advice"]["advice"]["a7"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a7"]["name"] }}" style="width:100%;max-width:397px;max-height:397px;object-fit:contain;">
                        </div>
                        <div class="col-7">
                            <h3 class="mb-4" style="padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a7"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-right:7rem;">
                                {{ $page_contents["advice"]["advice"]["a7"]['content'] }}
                            </p>
                            
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                    	<div class="col-7">
                            <h3 class="mb-4" style="padding-left:7rem;">
                                {{ $page_contents["advice"]["advice"]["a8"]['title'] }}
                            </h3>
                            <p class="text-green text-lg" style="font-style:italic;padding-left:7rem;">
                            	{{ $page_contents["advice"]["advice"]["a8"]['content'] }}
                    		</p>
                    	</div>
                    	<div class="col-5 text-right">
                            <img src="{{ asset($page_images["advice"]["advice"]["a8"]["path"]) }}" alt="{{ $page_images["advice"]["advice"]["a8"]["name"] }}" style="width:123%;max-width:480px;max-height:480px;object-fit:contain;margin-right:-160px;">
                    	</div>
                    </div>

                    <div class="row align-items-center" style="margin:150px 0;">
                        <div class="col text-center">
                            <h3>
                                {{ $page_contents["advice"]['footnote']['title'] }}
                            </h3>
                            <p class="text-green p-5 text-lg" style="font-style:italic;">
                                {{ $page_contents["advice"]['footnote']['content'] }}
                            </p>
                        </div>
                    </div>

				    <div class="row py-5">
				    	<div class="col-10 mx-auto">
				    		<div style="position: relative;padding-bottom: 56.25%;height: 0;margin-bottom:-300px;z-index: 10;">
				    			<iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" src="{{ $page_contents["advice"]["video"]["content"] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				    		</div>
				    	</div>
				    </div>

				</div>

			</div>


		</div>


	</section>






@endsection
