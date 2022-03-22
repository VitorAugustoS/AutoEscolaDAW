@extends("templates.main")

@section("titulo", "Cadastro de Carros")

@section("formulario")
	<form method="POST" action="/carro" class="row">
		<div class="form-group">
			<label>Marca:</label>
			<input type="text" name="marca" value="{{ $carro->marca }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Modelo:</label>
			<input type="text" name="modelo" value="{{ $carro->modelo }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Placa:</label>
			<input type="text" name="placa" value="{{ $carro->placa }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Cor:</label>
			<input type="text" name="cor" value="{{ $carro->cor }}" class="form-control" />
		</div>
		<div class="form-group">
			<label>Ano:</label>
			<input type="number" name="ano" value="{{ $carro->ano }}" class="form-control" />
		</div>
		<div>
			@csrf
			<input type="hidden" name="id" value="{{ $carro->id }}" />
			<button class="btn btn-success" type="submit"> <i class="bi bi-save"></i> Salvar</button>
			<a class="btn btn-square" href="/carro"> <i class="bi bi-plus-square"></i> Novo</a>
		</div>
	</form>
@endsection

@section("tabela")
	<table class="table table-striped">
		<colgroup>
			<col width="200">
			<col width="200">
			<col width="150">
			<col width="150">
			<col width="100">
			<col width="50">
			<col width="50">
		</colgroup>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Placa</th>
				<th>Cor</th>
				<th>Ano</th>
				<th>Edit</th>
				<th>Del</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($carros as $carro)
				<tr>
					<td>{{ $carro->marca }}</td>
					<td>{{ $carro->modelo }}</td>
					<td>{{ $carro->placa }}</td>
					<td>{{ $carro->cor }}</td>
					<td>{{ $carro->ano }}</td>
					<td>
						<a class="btn btn-warning" href="/carro/{{ $carro->id }}/edit"> <i class="bi bi-pencil-square"></i> Editar</a>
					</td>
					<td>
						<form method="POST" action="/carro/{{ $carro->id }}">
							@csrf
							<input type="hidden" name="_method" value="DELETE" />
							<button class="btn btn-danger" type="submit" onclick="return confirm('Deseja realmente excluir?');"> <i class="bi bi-trash"></i> Excluir</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection