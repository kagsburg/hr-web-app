@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contracts
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contracts, ['route' => ['contracts.update', $contracts->id], 'method' => 'patch']) !!}

                                        <div class="form-group col-sm-6">
                            {!! Form::label('status_id', 'Status:') !!}
                            {!! Form::select('status_id',$contractstatus, null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Emp Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('emp_id', 'Employee Name:') !!}
                            {!! Form::select('emp_id',$empfname, null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Period Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('period', 'Period:') !!}
                            {!! Form::number('period', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Startingdate Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('startingDate', 'Startingdate:') !!}
                            {!! Form::date('startingDate', null, ['class' => 'form-control','id'=>'startingDate']) !!}
                        </div>

                        @push('scripts')
                            <!-- <script type="text/javascript">
                                $('#startingDate').datetimepicker({
                                    format: 'YYYY-MM-DD HH:mm:ss',
                                    useCurrent: false
                                })
                            </script> -->
                        @endpush

                        <!-- Endingdate Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('endingDate', 'Endingdate:') !!}
                            {!! Form::date('endingDate', null, ['class' => 'form-control','id'=>'endingDate']) !!}
                        </div>

                        @push('scripts')
                            <script type="text/javascript">
                            // Date.Prototype.addYears=function(years){
                            //     var mar= new Date().getTime();
                            //     mar.addYears(4);
                            //     console.log(mar);
                            // }
                                // $('#endingDate').datetimepicker({
                                //     format: 'YYYY-MM-DD HH:mm:ss',
                                //     useCurrent: false
                                // })
                            </script>
                        @endpush

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('contracts.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection