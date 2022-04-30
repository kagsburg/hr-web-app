<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Departments</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">
<!-- Name Field -->
<div class="form-group ">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group ">
    {!! Form::label('HeadsofDepartments', 'Head of Department:') !!}
    {!! Form::text('HeadsofDepartments', null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group ">
   
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
   {!!Form::submit('Create Department',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>