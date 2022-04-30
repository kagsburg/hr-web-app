@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employee Leave
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($leave, ['route' => ['employeeleave.update', $leave->id], 'method' => 'patch']) !!}

             <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Approval:') !!}
    {!! Form::select('approval_by_supervisior', array('approved' => 'Approved', 'Denied' => 'Denied'), null, ['onchange'=>' EnableReason(this)','class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Reason:') !!}
    {!! Form::text('reason', null, ['class' => 'form-control','disabled','id'=>'reason']) !!}
</div>

<!-- Updatedby Field -->
<!-- <div class="form-group col-sm-6">
    
     <input type="hidden" name="updatedby" value=" {{ Auth::user()->name }}" class="form-control">
    
</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Update Changes', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
</div>

                   {!! Form::close() !!}
               </div>
               
@push('scripts')
    <script type="text/javascript">
   function EnableReason(susp) {
       var selected =susp.options[susp.selectedIndex].text;
       var enddate= document.getElementById("reason");
       var startdate= document.getElementById("suspensionstartdate");

       enddate.disabled = selected == "Denied" ? false : true ;
       if(!enddate.disabled){
        enddate.focus();  
       } 

      
   } 
        
    </script>
@endpush
           </div>
       </div>
   </div>
@endsection