@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

              
                <div class="box box-primary">
            <div class="box-body">
            @if (Auth::user()->roles == 2)
            @include('Supervisor.table')

            @endif
            
                    
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection