@extends('master')

@section('content')		  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Matricula (2021)	
							</h1>	
							<p class="text-white link-nav"><a href="/index">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/matricula"> Matricula</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Reservar entrevista</h1>
								<p>Proceso de admisión / Matricula</p>
							</div>
						</div>
					</div>						
					<form>
						<!-- Fecha y horario -->
						<h3 class="mb-25 text-center">Fecha y horario</h3>
						<div class="form-group" style="display:flex;justify-content: center;align-items: center;">
							<div class="form-group col-md-3" style="margin-right: 20px">
							<label for="inputDate">Seleccione una fecha</label>
							<input type="date" class="form-control" id="inputDate">
							</div>
							<div class="form-group col-md-2" style="margin-left: 20px">
								<label for="horario">Seleccione un horario</label>
								<input type="time" class="form-control" id="horario">
							</div>
						</div>
						<!-- Datos del Alumno -->
						<h3 class="mb-25 mt-50 text-center">Datos del Alumno</h3>
						<div class="form-group" style="display:flex;justify-content: space-evenly;align-items: center;">
							<div class="form-group col-md-4">
							<label for="dni_get">DNI</label>
							<input type="email" class="form-control" id="dni_get" placeholder="Introduzca DNI del alumno">
							</div>
							<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck" onclick="getAlumno()">
							<label class="form-check-label" for="gridCheck">
								Autocompletar datos
							</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="nombre_alumno">Nombres</label>
							<input type="text" class="form-control" id="nombre_alumno" placeholder="Nombres del alumno">
							</div>
							<div class="form-group col-md-4">
							<label for="apellido_alumno">Apellido</label>
							<input type="text" class="form-control" id="apellido_alumno" placeholder="Apellido del alumno">
							</div>
							<div class="form-group col-md-3">
							<label for="dni_alumno">DNI</label>
							<input type="numeric" class="form-control" id="dni_alumno" placeholder="Ingrese DNI del alumno">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="fecha_nacimiento_alumno">Fecha de Nacimiento</label>
							<input type="text" class="form-control" id="fecha_nacimiento_alumno" placeholder="Fecha de Nacimiento del alumno">
							</div>
							<div class="form-group col-md-4">
							<label for="direccion_alumno">Dirección</label>
							<input type="text" class="form-control" id="direccion_alumno" placeholder="Dirección de domicilio del alumno">
							</div>
							<div class="form-group col-md-3">
							<label for="localidad_alumno">Localidad</label>
							<input type="text" class="form-control" id="localidad_alumno" placeholder="Ingrese localidad">
							</div>
						</div>
						<!-- Datos de Padre/Madre/Tutor -->
						<h3 class="mb-25 mt-50 text-center">Datos del Padre/Madre/Tutor</h3>
						<div class="form-row">
							<div class="form-group col-md-4">
							<label for="nombre_tutor">Nombres</label>
							<input type="email" class="form-control" id="nombre_tutor" placeholder="Ingresar nombres">
							</div>
							<div class="form-group col-md-4">
							<label for="apellido_tutor">Apellido</label>
							<input type="password" class="form-control" id="apellido_tutor" placeholder="Ingresar apellido">
							</div>
							<div class="form-group col-md-3">
							<label for="dni_tutor">DNI</label>
							<input type="password" class="form-control" id="dni_tutor" placeholder="Ingresar DNI">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Reservar Turno</button>
					</form>													
				</div>	
			</section>
			<!-- End popular-courses Area -->			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Get reduced fee <br>
								during this Summer!
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Expert Instructors</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>		
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<div class="form-select" id="service-select">
									<select>
										<option datd-display="">Choose Course</option>
										<option value="1">Course One</option>
										<option value="2">Course Two</option>
										<option value="3">Course Three</option>
										<option value="4">Course Four</option>
									</select>
								</div>									
								<button class="primary-btn text-uppercase">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->			

			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Institute</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e1.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e2.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e1.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e1.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e2.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{ asset('img/e1.jpg') }}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->				

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    			
@endsection
@section('scripts')
<script>
		function getAlumno(){
			var dni = $('#dni_get').val();
			$.ajax({
				url: '/matricula/getAlumno/'+ dni,
				success: function(alumno) {
					$('#nombre_alumno').val(alumno['0']['nombre']);
					$('#apellido_alumno').val(alumno['0']['apellido']);
					$('#dni_alumno').val(alumno['0']['dni']);
					$('#fecha_nacimiento_alumno').val(alumno['0']['fecha_nacimiento']);
					$('#direccion_alumno').val(alumno['0']['direccion']);
					$('#localidad_alumno').val(alumno['0']['localidad']);
				},
				error: function() {
					console.log("No se ha podido obtener la información");
				}
			});
		}
</script>
@endsection	
