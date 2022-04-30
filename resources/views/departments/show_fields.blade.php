<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $departments->name }}</p>
</div>

<!-- Createdby Field -->
<div class="form-group">
    {!! Form::label('createdby', 'Createdby:') !!}
    <p>{{ $departments->createdby }}</p>
</div>

<!-- Updatedby Field -->
<div class="form-group">
    {!! Form::label('updatedby', 'Updatedby:') !!}
    <p>{{ $departments->updatedby }}</p>
</div>

