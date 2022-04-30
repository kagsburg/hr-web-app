<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Employee Disciplainary Issues</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">
<!-- Emp Pin Field -->
<div class="form-group ">
    {!! Form::label('emp_pin', 'Employee name:') !!}
    {!! Form::select('emp_pin',$empfname, null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group ">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id',$disstatus, null, ['class' => 'form-control','onchange'=>' EnableSuspension(this)']) !!}
</div>

<!-- Numberreceived Field -->
<div class="form-group ">
    {!! Form::label('NumberReceived', 'Number of times that status is issued:') !!}
    {!! Form::number('NumberReceived', null, ['class' => 'form-control']) !!}
</div>

<!-- Suspensionstartdate Field -->
<div class="form-group ">
    {!! Form::label('suspensionstartdate', 'Suspension starting date:') !!}
    {!! Form::date('suspensionstartdate', null, ['class' => 'form-control','id'=>'suspensionstartdate','disabled']) !!}
</div>



<!-- Suspensionenddate Field -->
<div class="form-group ">
    {!! Form::label('suspensionenddate', 'Suspension ending date:') !!}
    {!! Form::date('suspensionenddate', null, ['class' => 'form-control','id'=>'suspensionenddate','disabled']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
   function EnableSuspension(susp) {
       var selected =susp.options[susp.selectedIndex].text;
       var enddate= document.getElementById("suspensionenddate");
       var startdate= document.getElementById("suspensionstartdate");

       enddate.disabled = selected == "Suspension" ? false : true ;
       if(!enddate.disabled){
        enddate.focus();  
       } 

       startdate.disabled = selected == "Suspension" ? false : true ;
       if(!startdate.disabled){
        startdate.focus();  
       } 
   } 
        
    </script>
@endpush

<!-- Submit Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('disciplainaries.index') }}" class="btn btn-default">Cancel</a>
</div> -->

</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Add Disciplainary Issues',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>
