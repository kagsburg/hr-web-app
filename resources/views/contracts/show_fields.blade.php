<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $contracts['status']->status }}</p>
</div>

<!-- Emp Id Field -->
<div class="form-group">
    {!! Form::label('FirstName', 'Employee FirstName') !!}
    <p>{{ $contracts['employee']->FirstName }}</p>
</div>
<!-- Emp Id Field -->
<div class="form-group">
    {!! Form::label('LastName', 'Employee LastName') !!}
    <p>{{ $contracts['employee']->LastName }}</p>
</div>

<!-- Period Field -->
<div class="form-group">
    {!! Form::label('period', 'Period:') !!}
    <p>{{ $contracts->period }}</p>
</div>

<!-- Startingdate Field -->
<div class="form-group">
    {!! Form::label('startingDate', 'Startingdate:') !!}
    <p>{{ $contracts->startingDate }}</p>
</div>

<!-- Endingdate Field -->
<div class="form-group">
    {!! Form::label('endingDate', 'Endingdate:') !!}
    <p>{{ $contracts->endingDate }}</p>
</div>

