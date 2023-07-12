	<!--banner start-->
	<section class="banner">
		<div class="container">
			@foreach ($banner as $banimg )

			

			<div class="bcontent">
				<img src= "{{ $banimg->image }}" alt="gateway">
			</div>
				
			
			
			@endforeach
      </div>
	</section>
    <!-- banner end-->