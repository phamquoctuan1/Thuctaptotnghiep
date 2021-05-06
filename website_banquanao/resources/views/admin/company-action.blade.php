<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<a href="javascript:void(0)" data-toggle="tooltip" onClick="editFunc()" data-original-title="Edit" class="edit btn btn-success edit">
    Edit
    </a>
    <a href="javascript:void(0);" id="delete-compnay" onClick="deleteFunc()" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">
    Delete
    </a>
