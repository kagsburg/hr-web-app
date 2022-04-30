<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Employee Contracts</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">
<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id',$contractstatus, null, ['class' => 'form-control']) !!}
</div>

<!-- Emp Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_id', 'Employee Name:') !!}
    {!! Form::select('emp_id',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- Period Field -->
<div class="form-group col-sm-6">
    {!! Form::label('period', 'Period:') !!}
    {!! Form::number('period', null, ['class' => 'form-control']) !!}
</div>

<!-- Startingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startingDate', 'Startingdate:') !!}
    {!! Form::date('startingDate', null, ['class' => 'form-control','id'=>'startingDate']) !!}
</div>

@push('scripts')
    <!-- <script type="text/javascript">
        $('#startingDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script> -->
@endpush

<!-- Endingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endingDate', 'Endingdate:') !!}
    {!! Form::date('endingDate', null, ['class' => 'form-control','id'=>'endingDate']) !!}
</div>

@push('scripts')
    <!-- <script type="text/javascript">
        $('#endingDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script> -->
@endpush

<!-- Submit Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contracts.index') }}" class="btn btn-default">Cancel</a>
</div> -->

</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Add Contract',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>

