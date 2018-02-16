@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Actualizar Entrada
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
								<td>{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td>{{ $post->slug }}</td>
								<td>{{ $post->created_at }}</td>
								<td>{{ $post->updated_at }}</td>
								<td>
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
										Editar
									</a>
								</td>
							</tr>
							<tr>
								<td colspan="5">
								{{ $post->body }}
									
								</td>
								<td colspan="3"></td>
							</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
