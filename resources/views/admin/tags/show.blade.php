@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Actualizar etiqueta
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">Id</th>
								<th>Nombre</th>
								<th>Slug</th>
								<th>Creado</th>
								<th>Modificado</th>
								<th colspan="2">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td>{{ $tag->slug }}</td>
								<td>{{ $tag->created_at }}</td>
								<td>{{ $tag->updated_at }}</td>
								<td>
									<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning">
										Editar
									</a>
								</td>
								<td>
									{!! Form::open(
										['route'   => ['tags.destroy', 'id' => $tag->id], 
										 'method'  => 'DELETE' ] 
										 ) !!}
									<button class="btn btn-danger" type="submit"> Eliminar</button>
									{!! Form::close() !!}
								</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
