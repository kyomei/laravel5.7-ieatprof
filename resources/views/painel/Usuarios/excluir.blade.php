     

<!-- Modal Usuario Excluir -->
<div class="modal fade" id="modal_usuarioExcluir" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>        	
            <div class="modal-body">                
                <p>Tem certeza que deseja excluir o item selecionado?</p>                
            </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-sm btn-primary text-white" href="{{action('UsuariosController@delete', [$id])}}">Apagar</a>
	        </div>
      </div>
    </div>
</div>