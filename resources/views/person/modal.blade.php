<div class="modal fade modal-slide-in-right" id="modal-delete-{{ $disca->id }}" aria-hidden="true" role="dialog" tabindex="-1">
 {!! Form::open(array('action'=>array('PersonController@destroy',$disca->id),'method'=>'delete')) !!}
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
        <h4 class="modal-title">Eliminar Persona</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Confirme si desea eliminar el Persona</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Confirmar</button>
      </div>

    </div>
  </div>
 {!! Form::close() !!}
</div>
