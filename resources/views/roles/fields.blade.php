<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Status</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group ">
    {!! Form::label('createdby', 'Createdby:') !!}
    
 <input id="created" name="createdby" value=" {{ Auth::user()->name }}" placeholder="Enter CreatedBy" class="form-control" readonly>
</div>

<!-- Updatedby Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('updatedby', 'Updatedby:') !!}
    {!! Form::hidden('updatedby', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Submit Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
</div> -->
</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Create Status',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>
