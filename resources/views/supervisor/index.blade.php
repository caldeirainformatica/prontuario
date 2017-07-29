@extends('templates/principal')

@section('conteudo')

	<div class="row">
		<div class="col s10 offset-s1">
			<div class="card">
				<div class="card-content">
					<div>
						<h4 class="grey-text" align="center">Lista de Supervisores</h4>
					</div>
					<table class="striped bordered">
						<thead>
						<tr>
							<th>Ação</th>
							<th>Codigo</th>
							<th>Nome</th>
							<th>Telefone</th>
						</tr>
						</thead>
						<tbody>
						@foreach($dados as $dado)
							<tr>
								<td>

									<a class="waves-effect waves-light"
									   href="supervisor/alterar/{{$dado['id_supervisor']}}"><i
												class="material-icons left">mode_edit</i></a>
									<a href="supervisor/deletar/{{$dado['id_supervisor']}}"><i
												class="material-icons left red-text">delete</i></a>
								</td>
								{{--supervisor/deletar/{{$dado['id_supervisor']}}--}}
								<td>{{$dado['nu_codigo']}}</td>
								<td>{{$dado['tx_nome']}}</td>
								<td>{{$dado['nu_fone']}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				<div class="right-align">
					<a class="btn-floating btn-large waves-effect waves-light" href="{{route('supervisor.form')}}"><i
								class="material-icons">add</i></a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
//        function EventAlert(mensagem, id) {
			/*swal({
			 title: mensagem,
			 text: "Não podera recuperar o registro numero" + id,
			 type: "warning",
			 showCancelButton: true,
			 confirmButtonColor: "#DD6B55",
			 confirmButtonText: "Sim, apagar!",
			 cancelButtonText: "Não, cancele por favor!",
			 closeOnConfirm: false,
			 closeOnCancel: false,
			 }).then(function () {
			 swal("Deletado!", "Supervisor deletado.", "success" + id);
			 }, function () {
			 swal("Cancelled", "Cancelado :)", "error" + id);

			 });

            swal({
                    title: mensagem,
                    text: "Não podera recuperar o registro numero" + id,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sim, apagar!",
                    cancelButtonText: "Não, cancele por favor!",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function (isConfirm) {
                    if (isConfirm) {


                        $.get('/supervisor/deletar/' + id, function (data) {
                            console.log(data.data)
                            swal("Deletado!", "Supervisor " + id + " deletado.", "success");
                        })

                    }
                });
        }*/
	</script>
@endsection