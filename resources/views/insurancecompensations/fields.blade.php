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
<!-- Dateofincident Field -->
<div class="form-group">
    {!! Form::label('DateofIncident', 'Dateofincident:') !!}
    {!! Form::date('DateofIncident', null, ['class' => 'form-control','id'=>'DateofIncident']) !!}
</div>



<!-- Reason Of Claim Field -->
<div class="form-group">
    {!! Form::label('ReasonofClaim', 'Reason Of Claim:') !!}
    {!! Form::text('ReasonofClaim', null, ['class' => 'form-control']) !!}
</div>

<!-- Locationofincident Field -->
<div class="form-group">
    {!! Form::label('LocationofIncident', 'Locationofincident:') !!}
    {!! Form::text('LocationofIncident', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofcompensation Field -->
<div class="form-group">
    {!! Form::label('DateofCompensation', 'Dateofcompensation:') !!}
    {!! Form::date('DateofCompensation', null, ['class' => 'form-control','id'=>'DateofCompensation']) !!}
</div>



<!-- Emp Pin Field -->
<div>
    {!! Form::label('emp_pin', 'Employee FirstName:') !!}
    {!! Form::select('emp_pin',$empfname, null, ['class' => 'form-control','id'=>'emp']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group ">
   
    <input type="hidden" name="createdby" value=" {{ Auth::user()->name }}" class="form-control">
    
</div>

</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Save',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>
   @push('scripts')
    <script type="text/javascript">
$(document).ready(function(){
    $('#emp').select2({
        width: 'resolve'
    });
   

})
        
    </script>
@endpush