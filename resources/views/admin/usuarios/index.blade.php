@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Usuarios</div>
                <div class="card-body">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<table class="table">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Correo</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($usuarios AS $u)
									<tr>
										<td>{{ $u->name.' '.$u->paterno.' '.$u->materno }}</td>
										<td>{{ $u->email }}</td>
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