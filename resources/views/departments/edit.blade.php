@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Departments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($departments, ['route' => ['departments.update', $departments->id], 'method' => 'patch']) !!}

             <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->


<!-- Updatedby Field -->
<div class="form-group col-sm-6">
    
     <input type="hidden" name="updatedby" value=" {{ Auth::user()->name }}" class="form-control">
    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Update Changes', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
</div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection