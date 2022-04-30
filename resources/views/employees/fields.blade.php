<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FirstName', 'Firstname:') !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LastName', 'Lastname:') !!}
    {!! Form::text('LastName', null, ['class' => 'form-control']) !!}
</div>

<!-- Currentaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CurrentAddress', 'Currentaddress:') !!}
    {!! Form::text('CurrentAddress', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('Gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofjoining Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateofJoining', 'Dateofjoining:') !!}
    {!! Form::date('DateofJoining', null, ['class' => 'form-control','id'=>'DateofJoining']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DateofJoining').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateofBirth', 'Dateofbirth:') !!}
    {!! Form::date('DateofBirth', null, ['class' => 'form-control','id'=>'DateofBirth']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DateofBirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Martialstatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MartialStatus', 'Martialstatus:') !!}
    {!! Form::text('MartialStatus', null, ['class' => 'form-control']) !!}
</div>

<!-- Levelofeducation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LevelofEducation', 'Levelofeducation:') !!}
    {!! Form::text('LevelofEducation', null, ['class' => 'form-control']) !!}
</div>

<!-- Createdby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('createdby', 'Createdby:') !!}
    {!! Form::text('createdby', null, ['class' => 'form-control']) !!}
</div>

<!-- Updatedby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updatedby', 'Updatedby:') !!}
    {!! Form::text('updatedby', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Department_id', 'Department Id:') !!}
    {!! Form::number('Department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Division_id', 'Division Id:') !!}
    {!! Form::number('Division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
