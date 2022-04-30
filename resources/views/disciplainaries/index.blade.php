@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Disciplainaries</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#status-add-modal" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#"><i class="fa fa-plus-circle">Add New</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('disciplainaries.table')
                    {!! Form::open(['route' => 'disciplainaries.store']) !!}

                        @include('disciplainaries.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

