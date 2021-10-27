<div class="modal fade" id="myDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="#" id="form-delete">
      @csrf
      {{ method_field('DELETE') }}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ready to delete?</h4>
        </div>
        <div class="modal-body">
          Confirm deletion you will lose all data about this
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" id="confirm-delete">Confirm</button>
        </div>
      </div>
    </form>
  </div>
