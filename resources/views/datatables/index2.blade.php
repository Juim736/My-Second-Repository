@section('header_link')

	
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection 

@include('pk.includes.header')

	  
<br><br><br>

   <body>
        <div class="container">
            <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Location</th>
                <th>Zone</th>
                <th>LastGivingBlood</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
        </div>

      
        <!-- App scripts -->
        @section('footer_script')
		

		<script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        <script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'mobile', name: 'mobile' },
            { data: 'location', name: 'location' },
            { data: 'zone', name: 'zone' },
            { data: 'lastGivingBlood', name: 'lastGivingBlood' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>


@endsection
    
@include('pk.includes.footer')

