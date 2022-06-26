@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-10">
							Docentes / Crear
						</div>
						<div class="col-md-2 right">
							<a href="{{ route('docentes') }}">Cancelar</a>
						</div>
					</div>
				</div>
                <div class="card-body">
					<form method="POST" action="{{ route('docentes.store') }}">
                    @csrf
					<div class="row">
						<div class="col-md-3">
							<label>Clave</label>
							<input type="text" class="form-control" name="clave" id="clave" placeholder="PCOM-XXX/##" required>
						</div>

						<div class="col-md-3">
							<label>Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" autofocus required>
						</div>
						
						<div class="col-md-2">
							<label>Apellido Paterno</label>
							<input type="text" class="form-control" name="ap_paterno" id="ap_paterno" required>
						</div>

                        <div class="col-md-2">
							<label>Apellido Materno</label>
							<input type="text" class="form-control" name="ap_materno" id="ap_materno" required>
						</div>

                        <div class="col-md-2">
							<label>Contrato</label>
							<select class="form-control" name="contrato" id="contrato" required>
								<option value="">Seleccione un tipo de contrato</option>
								<option value="Plaza">Plaza</option>
                                <option value="Indefinido">Indefinido</option>
					        </select>
						</div>

						<div class="col-md-2">
							<label>Asignar Materia</label>
							<select class="form-control" name="materiaSeleccionada" id="materiaSeleccionada" required>
								<option value=""></option>
								@foreach($materias AS $m)
									<option value="{{ $m->id }}">{{ $m->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<br>
					
					<br>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<label>Teléfono</label>
									<input type="text" class="form-control" name="caracteristica" id="caracteristica">
								</div>
								<div class="col-md-2">
									<br><input type="button" class="btn btn-success" id="btnAdd" value="Agregar" onclick="addCaracteristica();">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row lista">
								<div class="col-md-12">
									<h3>Teléfonos del Docente</h3>
								</div>
								<input type="hidden" name="totCaracteristicas" id="totCaracteristicas" value="0">
							</div>
							<div class="row caracteristicas">
								
							</div>
						</div>
					</div>
					<br>
					
					<br>
					
					<br>
					<br>
					<div class="row">
						<div class="col-md-5">
							</select>
						</div>
						<div class="col-md-2">
							<input type="submit" class="btn btn-primary btn-block" value="Guardar">
						</div>
						<div class="col-md-5">
						</div>
					</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
	var contador = 0;
	
	function addCaracteristica(){
		var inputCaracteristica = $("#caracteristica").val();
		if(inputCaracteristica != ''){
			contador++;
			$(".caracteristicas").append('<div class="col-md-10 "><label id="c'+ contador +'">- '+inputCaracteristica+'  <i class="fas fa-trash-alt" onclick="deleteC('+contador+');"></i></label></div>');
			
			$(".lista").append('<input type="hidden" name="inputC'+ contador +'" id="inputC'+ contador +'" value="'+inputCaracteristica+'">');
		}
		$("#totCaracteristicas").val(contador);
		$("#caracteristica").val('');
	}
	function deleteC(id){
		$("#c"+id).remove();
		$("#inputC"+id).remove();
	}
</script>
@endsection