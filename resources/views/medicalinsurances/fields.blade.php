<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Employee MedicalInsurance</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">

<!-- Emp Pin Field -->
<div class="form-group">
    {!! Form::label('emp_pin', 'Employee Name :') !!}
    {!! Form::select('emp_pin',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Sibilings Field -->
<div class="form-group ">
    {!! Form::label('No_of_sibilings', 'No Of Sibilings:') !!}
    {!! Form::number('No_of_sibilings', null, ['class' => 'form-control']) !!}
</div>

<!-- Spouse Field -->
<div class="form-group ">
    {!! Form::label('Spouse', 'Spouse:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('Spouse', 0) !!}
        {!! Form::checkbox('Spouse', '1', null) !!}
    </label>
</div>


<!-- Card Status Field -->
<div class="form-group">
    {!! Form::label('Card_status', 'Card Status:') !!}
    {!! Form::text('Card_status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group ">
   
    <input type="hidden" name="createdby" value=" {{ Auth::user()->name }}" class="form-control">
    
</div>

<!-- Submit Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('medicalinsurances.index') }}" class="btn btn-default">Cancel</a>
</div>
 -->
</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Save',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>