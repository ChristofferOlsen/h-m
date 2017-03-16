@extends('layouts.master')

@section('content')
	@include('layouts.picture', ['image'=>'/img/produkter.jpg'])

	<section class="section-products">
		<div class="container">
			<div class="row">
			<div class="products-title col-sm-12">
				<h1>Produkter</h1>
				<hr>
				<h4>VI arbejder men Organic ColourSystems.<br>
					Sundeste farver til håret,bestående af, maksimale certificerede økologiske ingredienser, ammoniak fri og mimimum mængde af  kemikaler.
					Håret bliver smukt og blankt og dækker 100% gråt hår.
 					<br>
 					<br>
					Endvidere arbejder vi med permanent og farver fra Loreal.
					<br>
 					<br>
					Med stor fornøjelse bruger vi Matrix produkter i salonen fra Biolage, som er fri for parabener og sulfater, som også sælges til hjemmebrug.</h4>
			</div>
				<div class="products-wrapper">
					
					<div class="col-sm-4">
						<img class="products-img" src="/img/biolage_scale.png" alt="">
					</div>
					<div class="col-sm-4">
						<img class="products-img" src="/img/loreal_scale.png" alt="">
					</div>
					<div class="col-sm-4">
						<img class="products-img" src="/img/organic_scale.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection