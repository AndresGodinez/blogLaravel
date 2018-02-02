@extends('layouts.app')
@section('content')
{{-- {{dd($posts)}} --}}
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ route('posts.create') }}" class="btn btn-sm btn-info">
						Nueva Entrada
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
							@foreach ($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td>{{ $post->slug }}</td>
								<td>
									<a href="{{ route('posts.show',   $post->id ) }}"
										class="btn btn-info btn-sm">
										Detalles
									</a>
								</td>
								<td>
									<a href="{{ route('posts.edit',   $post->id )}}"
										class="btn btn-warning btn-sm">
										Actualizar
									</a>
								</td>
								<td>
									{!! Form::open(
										['route' => ['posts.destroy', $post->id], 
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
					{{$posts->render()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
