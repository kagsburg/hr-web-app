
@section('css')
    @include('layouts.datatables_css')
@endsection

<div class="table-responsive">

    <table class="table table-bordered table-striped" id="disciplainaryStatuses-table" width="100%">
     <thead>
      <tr>

        <th>Index</th>    
        <th>Status</th>
        <th>Createdby</th>
        <th>Action</th>
      </tr>
     </thead>
        <tbody>
        
            
      
        </tbody>
    </table>
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="modelHeading"></h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
                 

            </div>

            <div class="modal-body">

                <form id="statusForm" name="statusForm" class="form-horizontal">

                  

                    <div class="form-group">

                        <label class="col-sm-2 control-label">Status:</label>

                        <div class="col-sm-12">

                            <input type="text" class="form-control" id="status" name="status" placeholder="Enter Status" value="" maxlength="50" required="">

                        </div>

                    </div>

     

                    <div class="form-group">

                        <label class="col-sm-2 control-label">CreatedBy:</label>

                        <div class="col-sm-12">

                            <input id="created" name="CreatedBy" value=" {{ Auth::user()->name }}" placeholder="Enter CreatedBy" class="form-control">

                        </div>

                    </div>
                       <div class="form-group">

                        <label class="col-sm-2 control-label">UpdatedBy:</label>

                        <div class="col-sm-12">

                            <input id="updated" name="UpdatedBy" required="" placeholder="Enter CreatedBy" class="form-control">

                        </div>

                    </div>

      
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
            </div>
                    <input type="hidden" name="status_id" id="status_id">
                </form>

            </div>

        </div>

    </div>

</div>

    

@push('scripts')

@include('layouts.datatables_js')


<script>
   $( function () {
    $.ajaxSetup({
          headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
    });

   var table = $('#disciplainaryStatuses-table').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('disciplainary-Statuses') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'status', name: 'status' },
                    { data: 'createdby', name: 'createdby' },
                    { data: 'Action', name: 'Action',orderable: false }
               
                 ]
        });
        $('#createNewProduct').click(function () {

$('#saveBtn').val("create-product");

$('#status_id').val('');

$('#statusForm').trigger("reset");

$('#modelHeading').html("Create New Status");

$('#ajaxModel').modal('show');

});

        $('body').on('click', '.editProduct', function () {

var product_id = $(this).data('id');

$.get("{{ route('disciplainaryStatuses.index') }}" +'/' + product_id +'/edit', function (data) {

    $('#modelHeading').html("Edit Status");

    $('#saveBtn').html("Update Status");

    $('#ajaxModel').modal('show');

    $('#status_id').val(data.id);

    $('#status').val(data.status);

    $('#created').val(data.createdby);
    $('#updated').val(data.updatedby);

})

});



$('#saveBtn').click(function (e) {

  e.preventDefault();

  $(this).html('Sending..');



  $.ajax({

    data: $('#statusForm').serialize(),

    url: "{{ route('disciplainaryStatuses.store') }}",

    type: "POST",

    dataType: 'json',

    success: function (data) {


        alert("Status successfully Updated");
        $('#statusForm').trigger("reset");

        $('#ajaxModel').modal('hide');

        table.draw();

   

    },

    error: function (data) {

        console.log('Error:', data);

        $('#saveBtn').html('Save Changes');

    }

});

});



$('body').on('click', '.deleteProduct', function () {



  var product_id = $(this).data("id");

  confirm("Are You sure want to delete !");



  $.ajax({

      type: "DELETE",

      url: "{{ route('disciplainaryStatuses.store') }}"+'/'+product_id,

      success: function (data) {
        alert("Status successfully Deleted");

          table.draw();

      },

      error: function (data) {

          console.log('Error:', data);

      }

  });

});


        

     });
                      // Get single product in EditModel
        
    //  //$(document).on('click', '#getDelete', function(){
    //         deleteID = $(this).attr('id');
    //         $('#DeleteProductModal').modal('show');
    //     })
    

 


  </script>
@endpush