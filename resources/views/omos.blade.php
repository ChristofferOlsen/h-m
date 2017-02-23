@extends('layouts.master')

@section('content')

	@include('layouts.picture', ['image'=>'/img/main-omos.jpg'])

	<section class="omos">
		<div class="container">
			<div class="section-omos-wrapper">
				<div class="row">
					<div class="col-sm-6">
						<div class="display">
							<img class="person-picture" src="/img/person.jpg" alt="">
							<div class="omos-content">
								<h3>Tinne Holmen</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo commodi aut ut optio tempore corporis enim aspernatur nesciunt, necessitatibus harum, et, vero eum quasi. Illum laudantium voluptatibus molestiae debitis officia.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="display">
							<img class="person-picture" src="/img/person.jpg" alt="">
							<div class="omos-content">
								<h3>Tinna Maltby</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo commodi aut ut optio tempore corporis enim aspernatur nesciunt, necessitatibus harum, et, vero eum quasi. Illum laudantium voluptatibus molestiae debitis officia.</p>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection