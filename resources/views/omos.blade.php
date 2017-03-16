@extends('layouts.master')

@section('content')

	@include('layouts.picture', ['image'=>'/img/main-omos.jpg'])

	<section class="omos">
		<div class="container">
			<div class="section-omos-wrapper">
				<div class="row">
					<div class="col-sm-6">
						<div class="display">
							<h3>TINNE HOLMEN</h3>
							<div class="person-picture tinne">
								
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="display">
							<h3>TINA MALTBY</h3>
							<div class="person-picture tina">
								
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection