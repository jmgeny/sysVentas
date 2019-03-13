{!! Form::open(array('url'=>'almacen/category','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
{{-- 	<div class="form-group">
		<div class="input-group">
			  <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{ $searchText }}">
			  <span class="input-group-btn">
			  	<button class="btn btn-primary" type="submit">Enviar</button>
			  </span>
		</div>
	</div> --}}
	<div class="form-inline">
	<div class="form-group">
		{!! Form::text('searchText',null,['class'=>'form-control', 'placeholder'=>'Buscar...', 'value'=> '{{ $searchText }}']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
	</div>
	</div>
{!! Form::close() !!}