@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roles, ['route' => ['roles.update', $roles->id], 'method' => 'patch']) !!}
                   
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                  

                    <!-- Updatedby Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('updatedby', 'Updatedby:') !!}
                            <input  name="updatedby" value=" {{ Auth::user()->name }}" class="form-control" readonly>
                     
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Update Role', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection