<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batches)
            <tr>
                <td>{{ $batches->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batches->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batches->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batches->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



<div class="modal fade left" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleMoadalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true"></i><h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="close">
                   <span aria-hidden="true">&times;</span>
               </button>
         </div>
        <div class="modal-body"> 
        <input type="hidden" name="batch_id" id="batch_id">

        <!-- Batch Field -->
<div class="form-group">
    {!! Form::label('batch', 'Batch:') !!}
    <input type="text" name="batch" id="batch" readonly>
</div>


</div>
      <div class="modal-footer">
         <button type="button" class="btn btn-warning" data-dismiss="modal">close</button>
            {!! Form::submit('create Batch',['class'=>'btn btn-success'])!!}
      </div>
    </div>
 </div>
 </div>
 </div>

 @section('scripts')
 <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var batch = button.data('batch')

  var modal = $(this)

  modal.find('.modal-title').text('VIEW BATCH INFORMATION');
  modal.find('.modal-body #batch').val(batch);
});
 </script>
 @endsection
 

