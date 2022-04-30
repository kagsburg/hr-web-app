@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Contract Statuses</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#status-add-modal" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href=""><i class="fa fa-plus-circle">Add New</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            @include('contract_statuses.table')
            {!! Form::open(['route' => 'contractStatuses.store']) !!}

@include('contract_statuses.fields')

{!! Form::close() !!}
                    
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

