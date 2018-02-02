@extends('layouts.app')
@section('content')
{{-- {{dd($categories)}} --}}
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="{{ route('categories.create') }}" class="btn btn-sm btn-info">
						Nueva Categoría
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
							@foreach ($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->slug }}</td>
								<td>
									<a href="{{ route('categories.show',   $category->id ) }}"
										class="btn btn-info btn-sm">
										Detalles
									</a>
								</td>
								<td>
									<a href="{{ route('categories.edit',   $category->id )}}"
										class="btn btn-warning btn-sm">
										Actualizar
									</a>
								</td>
								<td>
									{!! Form::open(
										['route' => ['categories.destroy', $category->id], 
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
					{{$categories->render()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
