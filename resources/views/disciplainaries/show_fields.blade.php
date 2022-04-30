<!-- Emp Pin Field -->
<div class="form-group">
    {!! Form::label('FirstName', 'Employee First Name:') !!}
    <p>{{ $disciplainary['emp']->FirstName }}</p>
</div>

<div class="form-group">
    {!! Form::label('FirstName', 'Employee Last Name:') !!}
    <p>{{ $disciplainary['emp']->LastName }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
  
    <p>{{ $disciplainary["status"]->status }}</p>
    
</div>

<!-- Numberreceived Field -->
<div class="form-group">
    {!! Form::label('NumberReceived', 'Numberreceived:') !!}
    <p>{{ $disciplainary->NumberReceived }}</p>
</div>

<!-- Suspensionstartdate Field -->
<div class="form-group">
    {!! Form::label('suspensionstartdate', 'Suspensionstartdate:') !!}
    <p>{{ $disciplainary->suspensionstartdate }}</p>
</div>

<!-- Suspensionenddate Field -->
<div class="form-group">
    {!! Form::label('suspensionenddate', 'Suspensionenddate:') !!}
    <p>{{ $disciplainary->suspensionenddate }}</p>
</div>

