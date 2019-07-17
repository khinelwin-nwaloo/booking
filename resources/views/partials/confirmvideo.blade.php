<!-- Modal Dialog -->
<div class="modal" id="confirmVideo" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete video</h4>
      </div>
      <div class="modal-body">
        <p>Permanently delete your video? You can't undo this. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirm">Delete</button>
      </div>
    </div>
  </div>
</div>

@section('js')
<!-- Dialog show event handler -->
<script type="text/javascript">


  $('#confirmVideo').on('show.bs.modal', function (e) {
    $message = $(e.relatedTarget).attr('data-message');
    $(this).find('.modal-body p').text($message);
    $title = $(e.relatedTarget).attr('data-title');
    $(this).find('.modal-title').text($title);

    var form = $(e.relatedTarget).closest('form');
    $(this).find('.modal-footer #confirm').data('form', form);
  });

  $('#confirmVideo').find('.modal-footer #confirm').on('click', function () {
    $(this).data('form').submit();
  });

</script>
@endsection