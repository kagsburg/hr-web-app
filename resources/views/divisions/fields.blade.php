<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Employee Divisions </i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">
<!-- Divisionname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Divisionname', 'Divisionname:') !!}
    {!! Form::text('Divisionname', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position', 'Position:') !!}
    {!! Form::text('Position', null, ['class' => 'form-control']) !!}
</div>

<!-- sub-Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sub-Position', 'Sub-Position:') !!}
    {!! Form::text('Sub-Position', null, ['class' => 'form-control']) !!}
</div>


<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Department_id', 'Department Name:') !!}
    {!! Form::select('Department_id',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Department_id', 'Department Head:') !!}
    {!! Form::select('Department_id',$empname, null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group col-sm-6">
 
<input type="hidden" name="createdby" value=" {{ Auth::user()->name }}" class="form-control">
 
</div>

<!-- Updatedby Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('updatedby', 'Updatedby:') !!}
    {!! Form::text('updatedby', null, ['class' => 'form-control']) !!}
</div> -->



</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Create Division',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>
