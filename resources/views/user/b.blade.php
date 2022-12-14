<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datatable Card Bootstrap 4</title>
    <meta name="author" content="itmilenial">
    <meta name = "author" content = "itmilenial, dev.itmilenial@gmail.com">
    <Meta name = "rating" content = "General">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <style type="text/css">
   #dt.dataTable.no-footer{
      border-bottom: unset;
    }
    #dt tbody td {
        display: block;
        border: unset;
    }
    #dt>tbody>tr>td{
      border-top: unset;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <div class="row">
        
        <div class="col-12 mb-5">
          <div class="card shadow-sm border-primary bg-primary">
            <div class="card-body text-center text-white py-5">
              <h1>Datatables Card Bootstrap 4</h1>
              <br>
              <a href="https://itmilenial.com/onepage/index/databables-card-bootstrap" class="btn btn-outline-light btn-sm" target="_blank">See More</a>
              <a href="https://github.com/fhdjg/datatable-card-bootstrap-4" class="btn btn-outline-light btn-sm" target="_blank">Download On Github</a>
            </div>
          </div>
        </div> <!-- end col-12 -->

      <div class="col-12">
        
        <table id="dt" class="table w-100">
          <thead>
            <tr>
              <th>nama</th>
              <th>gender</th>
              <th>email</th>
              <th>address</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div> <!-- end container -->

	<script type="text/javascript">
		
		$(document).ready(function() {
			    $("#dt thead").hide();
        var dt = $('#dt').DataTable({
               ajax: "/webinar/list",
              bInfo: false,
         pageLength: 8,
       lengthChange: false,
        deferRender: true,
         processing: true,
         language: {  
              paginate: {
                  previous: "<",
                  next: ">"
              },
            },
            columns: [
                {
                    render: function (data, type, row, meta) { 
                      var html =
                      '<div class="card shadow">'+
											'  <img src="'+row.link+'" class="card-img-top">'+
											'  <div class="card-body">'+
                      '    <div class="card-text">Nama : '+row.title+'</div>'+
                      '    <div class="card-text">Kontak : '+row.title+'</div>'+
											'  </div>'+
											'</div>';
                      return html;
                    }
                },
                {
                  data :"title", visible: true
                }
            ]
        });

       dt.on('draw', function(data){
        $('#dt tbody').addClass('row');
        $('#dt tbody tr').addClass('col-lg-3 col-md-4 col-sm-12');
       });
		});
	</script>
</body>
</html>