@extends('layouts.app')
@section('content')
{{-- {{dd($tags)}} --}}
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ route('tags.create') }}" class="btn btn-sm btn-info">
						Nueva etiqueta
					</a>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="20px">ID</th>
								<th>Nombre</th>
								<th>Slug</th>
								<th colspan="3">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td>{{ $tag->slug }}</td>
								<td>
									<a href="{{ route('tags.show',   $tag->id ) }}"
										class="btn btn-info btn-sm">
										Detalles
									</a>
								</td>
								<td>
									<a href="{{ route('tags.edit',   $tag->id )}}"
										class="btn btn-warning btn-sm">
										Actualizar
									</a>
								</td>
								<td>
									{!! Form::open(
										['route' => ['tags.destroy', $tag->id], 
										'method' => 'DELETE']
									) !!}
									<button type="submit" class="btn btn-sm btn-danger">
										Eliminar
									</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$tags->render()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
