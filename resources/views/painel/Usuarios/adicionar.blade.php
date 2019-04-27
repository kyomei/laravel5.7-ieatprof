<!-- Modal default -->
  <div class="modal fade" id="defaultModalUser" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
       	<form action="{{action('UsuariosController@insert')}}" method="POST">
        	<div class="modal-body">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">      	
                <div class="row">
                    <div class="col-12">					
                        <div class="form-group">
                            <label>Nome</label><input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirma senha</label>
                            <input type="password" class="form-control" name="confirma_senha" placeholder="Repita senha">
                        </div> 
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Cargo</label>
                            <select name="cargo" class="form-control">
                                <option value="admin">Administrador</option>
                                <option value="usuario">Usuário</option>
                            </select>
                        </div>
                    </div>
                </div>
	        </div>
	        <div class="modal-footer">
	          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
	        </div>
        </form>
      </div>
    </div>
  </div>