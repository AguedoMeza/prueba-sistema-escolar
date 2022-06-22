@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Docentes
				@guest
						@else
						<div class="col-md-2 right">
							<a href="{{ route('docentes.create') }}">Crear</a>
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
										<th>Nombre</th>
										<th>Contrato</th>
										<th>telefonos</th>
									</tr>
								</thead>
								<tbody>
									@php
										$c = 0;
									@endphp
									@foreach($docentes AS $d)
									
									<tr>
										<td>{{ $d->clave }}</td>
										<td>{{ $d->nombre.' '.$d->ap_paterno.' '.$d->ap_materno }}</td>
										<td>{{ $d->contrato }}</td>
										<td>{{ $test = json_encode($docentes[$c]['telefonos']['number']) }}</td>
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