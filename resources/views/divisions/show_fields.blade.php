<!-- Divisionname Field -->
<div class="form-group">
    {!! Form::label('Divisionname', 'Divisionname:') !!}
    <p>{{ $divisions->Divisionname }}</p>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('Position', 'Position:') !!}
    <p>{{ $divisions->Position }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('Department_id', 'Department Name:') !!}
    <p>{{ $divisions['department']->name }}</p>
</div>



