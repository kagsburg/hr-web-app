
<div class="modal fade" id = "status-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-notify modal-ms modal-default" role="document">
   <div class="modal-content" >
    <div class="modal-header">
     <h5 class="modal-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true">Employee Leave</i></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body">

<!-- emp pin field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Employee Pin:') !!}
   <input type="text" class="form-control" value="{{$user_id}}" name="emp_pin" readonly>
</div>
<!-- Department name field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Department name:') !!}
   <input type="text" class="form-control" value="{{$userdepafrtid->Department_id}}" name="depart_id" readonly>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status', 'Division id:') !!}
   <input type="text" class="form-control" value="{{$user_details->Division_id}}" name="division_id" readonly>
</div>


<div class="form-group col-sm-6">
    {!! Form::label('status', 'Number of Days of Local Leave:') !!}
   <input type="number" class="form-control" id="Term" value="" name="days_taken" required>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('startingDate', 'Startingdate:') !!}
    {!! Form::date('Starting_date', null, ['class' => 'form-control','id'=>'startingDate']) !!}
</div>

<!-- Endingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endingDate', 'Endingdate:') !!}
    {!! Form::date('ending_date', null, ['class' => 'form-control','id'=>'endingDate']) !!}
</div>
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="text/javascript">
	
function endingDate(date){
   var valid_days = parseInt($(this).find("[name='valid_days']").val());
var start_date= $(this).find("[id='startingDate']").val();
var end_date = new Date(start_date); // pass start date here
end_date.setDate(end_date.getDate() + valid_days);
var end= $('#end_date').val( (end_date.getMonth() + 1)+ '/' + end_date.getDate() + '/' + end_date.getFullYear() );

}




	// format (YYYY-MM-DD HH:mm:ss)
var start_date = '2019-04-23 20:15:00'; 
var days = 5;

// result should be '2019-04-23 20:20:00'
var end_date = moment(start_date).add(days, 'days').format('YYYY-MM-DD HH:mm:ss');




// $(document).ready(function() {
//  // DATEPICKER DATES 7 END CONTRACT CALCULATION
//  $(function() {
//  $( "#startingDate, #endingDate" ).datepicker({
//  defaultDate: "+1w",
//  dateFormat: 'dd/mm/yy',
//  changeMonth: true,
//  numberOfMonths: 1,
 
//  onSelect: function( selectedDate ) {
//  if(this.id == 'startingDate'){
//  var ContractTerm = $('#Term').val();
//  //var ContractTerm = 3;
 
//  var dateMin = $('#startingDate').datepicker("getDate");
//  var rMax = new Date(dateMin.getFullYear() + ContractTerm, dateMin.getMonth(),dateMin.getDate() - 1); 
//  console.log(rMax);
//  $('#endingDate').val($.datepicker.formatDate('dd/mm/yy', new Date(rMax)));                    
//  }
//  }
//  });
//  });
// });


</script>

@endpush
<!-- Submit Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contractStatuses.index') }}" class="btn btn-default">Cancel</a>
</div> -->

</div>
   <div class="modal-footer">
   <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
   {!!Form::submit('Submit Form',['class'=>'btn btn-info'])!!}
   </div>
   </div>
   </div>
   </div>
