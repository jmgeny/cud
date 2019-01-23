<div class="modal fade modal-slide-in-right" tabindex="-1" role="dialog" aria-hidden='true' id="modal-delete-{{ $person->id }}">
  {{ Form::open(array('action'=>array('PersonController@destroy',$person->id),'method'=>'delete')) }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirme si desea eliminar</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
  {{ Form::close() }}
</div>