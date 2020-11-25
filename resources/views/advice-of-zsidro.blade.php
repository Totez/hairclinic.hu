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
                    		<p class="text-green p-5 text-sm">
                    			{!! $page_contents["advice"]['headline']['content'] !!}
                    		</p>
                    	</div>
                    	<div class="col-6">
                            <img src="{{ asset($page_images["advice"]["headline"]["path"]) }}" alt="{{ $page_images["advice"]["headline"]["name"] }}" style="top:-400px;position:absolute;width:397px;">
                    	</div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom:50px;">
                    	<div class="offset-6 col-6" style="height:200px;">
                			<span class="text-left" style="font-size:67.3px;margin-right:-150px;line-height: 1.2;position:absolute;display: block;">
		                        {!! $page_contents["advice"]["description"]["content"] !!}
                			</span>
                    	</div>
                    </div>






                @foreach($page_contents["advice"]["advice"] as $i => $value)
                   @if($loop->odd) 
                        <div class="row align-items-center" style="margin:150px 0;">
                        	<div class="col">
                                <img src="{{ asset($page_images["advice"]["advice"][$i]["path"]) }}" alt="{{ $page_images["advice"]["advice"][$i]["name"] }}" style="width:397px;margin-left:-200px;">
                        	</div>
                        	<div class="col">
                                <h3>
                                    {{ $value['title'] }}
                                </h3>
                                <p class="text-green p-5 text-lg" style="font-style:italic;">
                        			{{ $value['content'] }}
                        		</p>
                                
                        	</div>
                        </div>
                    @else
                        <div class="row align-items-center" style="margin:150px 0;">
                        	<div class="col">
                                <h3>
                                    {{ $value['title'] }}
                                </h3>
                                <p class="text-green p-5 text-lg" style="font-style:italic;">
                                	{{ $value['content'] }}
                        		</p>
                        	</div>
                        	<div class="col text-right">
                                <img src="{{ asset($page_images["advice"]["advice"][$i]["path"]) }}" alt="{{ $page_images["advice"]["advice"][$i]["name"] }}" style="width:397px;margin-right:-200px;">
                        	</div>
                        </div>
                    @endif
                @endforeach



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
