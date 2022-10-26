<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <title>Fetch All Registrations Data tables</title>
</head>

<body>
    <br>
<a href="register.php" class="btn btn-info" style="float:right; margin-right: 20px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Register Form</a>

<a ></a><h3 class="text-info"><i><u>All Registrations Are Shown Here:</u></i></h3>
<br><br>   

    <div class="container-fluid">
        <table id="myTable" class=" table table-bordered table-responsive-lg ">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>F. Name</th>
                    <th>Roll. No.</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>REG. ID.</th>
                    <th>Fees</th>
                    <th>Age</th>
                    <th>Subjects</th>
                    <th>Gender</th>
                </tr>
            </thead>
        </table>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>


    <script>
        
        // function new(){
    $(document).ready(function(){
    // aaaa();
    });
      
        $("#myTable").ready(function(){
          let table = $('#myTable').DataTable({
          dom: 'Bfrtip',
          orderCellsTop: true,
          fixedHeader: true,
          
                  buttons: [
                      'copy', 'csv', 'excel', 'pdf', 'print',
                  ]
          });
          console.log(table);
          // Setup - add a text input to each footer cell
          $('#myTable thead tr').clone(true).appendTo( '#myTable thead' );
          $('#myTable thead tr:eq(1) th').each( function (i) {
              var title = $(this).text();
              $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
              $( 'input', this ).on( 'keyup change', function () {
                  if ( table.column(i).search() !== this.value ) {
                      table
                          .column(i)
                          .search( this.value )
                          .draw();
                    }
              });
          });
          
            $.ajax({
              url: 'fetch_ajax.php',
              type:'POST',
              data: {action:'view'},
              success: function(data) {
                console.log(data);
                table.clear().draw();
                var sno='0';
                for (var i = 0; i < data.length; i++) {
                  sno++;
                  
                //     btn_edit = '<button class="btn btn-sm btn-select 702a1b_2" data-id="'+data[i].CO_CODE+'" ><i class="far fa-edit text-info fa-fw"></i></button>';
                //   btn = btn_edit; 
                  table.row.add([sno,data[i].id,data[i].name,data[i].f_name,data[i].roll_no,data[i].class,data[i].section,data[i].reg_id,data[i].fees,data[i].age,data[i].subjects,data[i].gender]);
                }
                table.draw();
              },
              error: function(e){
                  console.log(e);
                  alert("Contact IT Department");
              }
         
        });
    })
    </script>
</body>

</html>