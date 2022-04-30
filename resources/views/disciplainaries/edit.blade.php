@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Disciplainary
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($disciplainary, ['route' => ['disciplainaries.update', $disciplainary->id], 'method' => 'patch']) !!}

                        
                    <!-- Status Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('status_id', 'Status:') !!}
                        {!! Form::select('status_id',$disstatus, null, ['class' => 'form-control','onchange'=>' EnableSuspension(this)']) !!}
                    </div>

                    <!-- Numberreceived Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('NumberReceived', 'Number of times that status is issued:') !!}
                        {!! Form::number('NumberReceived', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Suspensionstartdate Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('suspensionstartdate', 'Suspension starting date:') !!}
                        {!! Form::date('suspensionstartdate', null, ['class' => 'form-control','id'=>'suspensionstartdate','disabled']) !!}
                    </div>



                    <!-- Suspensionenddate Field -->
                    <div class="form-group col-sm-6">
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
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('disciplainaries.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection