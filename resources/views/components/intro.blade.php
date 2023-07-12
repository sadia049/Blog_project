<!--intro start-->
<article class="gateway">
       	<div class="container2">
			
			@foreach ($intro as $item)
				<div class="g_content">
       			<span class="c_span" >PHOTODIARY</span>
       			<h1 class="c_h1" id="heading">{{ $item->heading }}</h1>
       			<p class="c_p" id="desc">{{ $item->description}}</p>
       			<span class="c_span">Leave a comment</span>
       			
       		</div>
			@endforeach
       	</div>
       </article>

<!-- intro ended-->


<!-- <script>
    const getHero=async()=>{
        

             // Loader Show Content Hide
           
            let heading = "";
			let desc = "";
            let res = await axios.get('/intro');
			let result =res.data;
			   
            document.getElementById('heading').innerHTML =res.data[0];
            document.getElementById('desc').innerHTML = "World";
           
        
    };
    getHero();




</script> -->