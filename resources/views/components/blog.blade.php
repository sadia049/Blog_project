    <!--blog started -->
    <section class="blog">
       	<div class="container2">
			@foreach ($blog  as $item)
				
			
       		<div class="blog_content">
       			<img src="{{ $item->image }}" alt="blog1">
       			<span class="c_span">{{ $item->name }}</span>
       			<h2 class="c_h1">{{ $item->title  }}</h2>
       			<p class="c_p">{{ $item->short_description }} </p>

			<div class="load">
               <!-- <a href="{{url('/blogdetails')}}"><button>Read more</button></a>-->
			   <a href="/blogdetails/{{ $item->id }}"><button>Read more</button></a>

          </div>
       			
       	</div>

			@endforeach
       		<!-- <div class="blog_content">
       			<img src="{{asset('assets/b2.jpg')}}" alt="blog1">
       			<span class="c_span">Lifestyle</span>
       			<h2 class="c_h1">Life tastes better with coffee </h2>
       			<p class="c_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
       			
       		</div>
       		<div class="blog_content">
       			<img src="{{asset('assets/b3.jpg')}}" alt="blog1">
       			<span class="c_span">Lifestyle</span>
       			<h2 class="c_h1">American dream</h2>
       			<p class="c_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
       			
       		</div>
       		<div class="blog_content">
       			<img src="{{asset('assets/b4.jpg')}}" alt="blog1">
       			<span class="c_span">Lifestyle</span>
       			<h2 class="c_h1">A day exploring the Alps </h2>
       			<p class="c_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
       			
       		</div> -->
       	</div>
       </section>