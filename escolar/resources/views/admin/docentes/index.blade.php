@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Docentes</div>
                <div class="card-body">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<table class="table">
								<thead>
									<tr>
										<th>Clave</th>
										<th>Nombre</th>
										<th>Contrato</th>
										<th>telefonos</th>
									</tr>
								</thead>
								<tbody>
									@foreach($docentes AS $d)
									<tr>
										<td>{{ $u->nombre.' '.$u->ap_paterno.' '.$u->ap_materno }}</td>
										<td>{{ $u->contrato }}</td>
										<td></td>
										<td></td>
									</tr>
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