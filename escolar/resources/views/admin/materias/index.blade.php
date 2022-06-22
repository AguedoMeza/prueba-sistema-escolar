@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-10">
							Materias
						</div>
						@guest
						@else
						<div class="col-md-2 right">
							<a href="">Crear</a>
						</div>
						@endguest
					</div>
				</div>
                <div class="card-body">
					
					<br>
					<div class="row">
						@foreach($materias AS $m)
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12 previa">
									<img src="{{ asset('img/imagen.jpg') }}">
								</div>
							</div>
							<div class="row acciones">
								<div class="col-md-3">
								</div>
								<div class="col-md-2">
									<a href=""><i class="fas fa-eye fa-lg"></i></a>
								</div>
								<div class="col-md-2">
									@guest
									@else
									<a href=""><i class="fas fa-pen fa-lg"></i></a>
									@endguest
								</div>
								<div class="col-md-2">
									@guest
									@else
									<a href="#" onclick=""><i class="fas fa-trash-alt fa-lg"></i></a>
									@endguest
								</div>
								<div class="col-md-3">
								</div>
							</div>
						</div>
						@endforeach
					</div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
	function deleteInmueble(id){
		event.preventDefault();
		Swal.fire({
			title: '¿Estás seguro de eliminar este inmueble?',
			showCancelButton: true,
			confirmButtonText: 'Si'
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				$.ajax({
					data:{a:id,_token: '{{csrf_token()}}'},
					type: 'GET',
					url: 'test/5',
					beforeSend: function () {
						
					},
					success: function(response) {
						if(response == 1){
							Swal.fire('Correcto', 'Acción exitosa','success').then(function() {
								window.location.replace("{{url('inmuebles')}}");
							});
						}
					}
				});
			}
		})
	}
</script>
@endsection