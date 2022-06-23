@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alumnos
				@guest
						@else
						<div class="col-md-2 right">
							<a href="{{ route('alumnos.create') }}">Crear</a>
						</div>
				@endguest
		    	</div>
                <div class="card-body">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th>Clave</th>
										<th>Nombre Completo</th>
										<th>Edad</th>
										<th>Dirección</th>
                                        <th>Correo</th>
									</tr>
								</thead>
								<tbody>
									@php
										$c = 0;
									@endphp
									@foreach($alumnos AS $a)
									
									<tr>
										<td>{{ $a->clave }}</td>
										<td>{{ $a->nombre_completo }}</td>
										<td>{{ $a->edad }}</td>
                                        <td>{{ $a->calle.' '.$a->numero }}</td>
                                        <td>{{ $a->correo }}</td>
									</tr>
									@php
										$c++;
									@endphp
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>

</script>
@endsection