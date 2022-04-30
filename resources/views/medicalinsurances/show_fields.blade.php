<!-- Emp Pin Field -->

<div class="form-group">
    {!! Form::label('FirstName', 'Employee FirstName') !!}
    <p>{{ $medicalinsurance['emp']->FirstName }}</p>
</div>
    

<div class="form-group">
    {!! Form::label('FirstName', 'Employee FirstName') !!}
    <p>{{ $medicalinsurance['emp']->LastName }}</p>
</div>
<div class="form-group">
    {!! Form::label('FirstName', 'Employee FirstName') !!}
    <p>{{ $medicalinsurance['emp']['Department_id'] }}</p>
</div>
<!-- No Of Sibilings Field -->
<div class="form-group">
    {!! Form::label('No_of_sibilings', 'No Of Sibilings:') !!}
    <p>{{ $medicalinsurance->No_of_sibilings }}</p>
</div>

<!-- Spouse Field -->
<div class="form-group">
    {!! Form::label('Spouse', 'Spouse:') !!}
    <p>{{ $medicalinsurance->Spouse }}</p>
</div>

<!-- Card Status Field -->
<div class="form-group">
    {!! Form::label('Card_status', 'Card Status:') !!}
    <p>{{ $medicalinsurance->Card_status }}</p>
</div>

<!-- Createdby Field -->
<div class="form-group">
    {!! Form::label('createdby', 'Createdby:') !!}
    <p>{{ $medicalinsurance->createdby }}</p>
</div>

<!-- Updatedby Field -->
<div class="form-group">
    {!! Form::label('updatedby', 'Updatedby:') !!}
    <p>{{ $medicalinsurance->updatedby }}</p>
</div>

