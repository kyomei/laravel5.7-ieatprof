<!-- Modal default -->
  <div class="modal fade" id="modal_usuarioEditar" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

       	<form action="{{action('UsuariosController@update', [$usuario->id])}}" method="POST">
        	<div class="modal-body">                
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">      	
                <div class="row">
                    <div class="col-12">					
                        <div class="form-group">
                            <label>Nome</label><input type="text" class="form-control" name="nome" placeholder="Nome" value="{{$usuario->nome}}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{$usuario->email}}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nova senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="Senha" value="{{$usuario->senha}}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Cargo</label>
                            <select name="cargo" class="form-control">
                                <option value="admin" {{$usuario->cargo == 'admin' ? 'selected' : ''}}>Administrador</option>
                                <option value="usuario" {{$usuario->cargo == 'usuario' ? 'selected' : ''}}>Usuário</option>
                            </select>
                        </div>
                    </div>
                </div>
	        </div>
	        <div class="modal-footer">
	          <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	          <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
	        </div>
        </form>
      </div>
    </div>
  </div>