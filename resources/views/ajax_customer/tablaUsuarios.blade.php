
@if(count($usuarios) > 0)
	

		<table class="table" id="myTable">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Telefono</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)

					<tr>
						<td>{{ $usuario->nombre }}</td>
						<td>{{ $usuario->telefono }}</td>
						<td></td>
					</tr>

				@endforeach
			</tbody>	
		</table>


@endif