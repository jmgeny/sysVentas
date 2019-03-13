@extends('layouts.admin')

@section('contenedor')
          <!-- Breadcrumbs-->
<section class="container">
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <a href="category/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.category.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
	<table class="table table-bordered">
		<thead>
			<th>id</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			@foreach($categorias as $categoria)
			<tr>
				<td>{{ $categoria->id }}</td>
				<td>{{ $categoria->nombre }}</td>
				<td>{{ $categoria->descripcion }}</td>
				<td>
					<a href="#"><button class="btn btn-info">Editar</button></a>
					<a href="#"><button class="btn btn-danger">Eliminar</button></a>
				</td>
			</tr>
			@endforeach			
		</tbody>
	</table>
	{{ $categorias->links() }}
	</div>
</div>	
</section>




@stop      