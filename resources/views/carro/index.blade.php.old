<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Carros</title>
	</head>
	<body>
		<form method="POST" action="/carro">
			<div>
				<label>Marca:</label>
				<input type="text" name="marca" value="{{ $carro->marca }}" />
			</div>
			<div>
				<label>Modelo:</label>
				<input type="text" name="modelo" value="{{ $carro->modelo }}" />
			</div>
			<div>
				<label>Placa:</label>
				<input type="text" name="placa" value="{{ $carro->placa }}" />
			</div>
			<div>
				<label>Cor:</label>
				<input type="text" name="cor" value="{{ $carro->cor }}" />
			</div>
			<div>
				<label>Ano:</label>
				<input type="number" name="ano" value="{{ $carro->ano }}" />
			</div>
			<div>
				@csrf
				<input type="hidden" name="id" value="{{ $carro->id }}" />
				<button type="submit">Salvar</button>
				<a href="/carro">Novo</a>
			</div>
		</form>
		<table border="1">
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
							<a href="/carro/{{ $carro->id }}/edit">Editar</a>
						</td>
						<td>
							<form method="POST" action="/carro/{{ $carro->id }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE" />
								<button type="submit" onclick="return confirm('Deseja realmente excluir?');">Excluir</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>