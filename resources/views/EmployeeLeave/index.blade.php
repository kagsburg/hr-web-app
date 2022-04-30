@extends('layouts.app')

@section('content')

  <section class="content-header">
        <h1 class="pull-left">Employee leave</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#status-add-modal" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href=""><i class="fa fa-plus-circle">Add New</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="col-md-5 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Days Taken of Leave</span>
            <span class="info-box-number">{{$daystaken}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>   
      <div class="col-md-5 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Remaining Days</span>
            <span class="info-box-number">{{$remainingLeaveDays}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
        <div class="clearfix"></div>
        
            
          <div class="box box-primary">
              <div class="box-body">
            @include('EmployeeLeave.table')
                </div>        
          </div>
            {!! Form::open(['route' => 'employeeleave.store']) !!}

 @include('EmployeeLeave.fields')


 {!! Form::close() !!}
                    
           
       
        <div class="text-center">
        
        </div>
    </div>

@endsection	