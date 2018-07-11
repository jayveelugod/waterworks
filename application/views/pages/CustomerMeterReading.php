<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/waterworks.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='assets/css/googleFonts.css' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="assets/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="assets/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="active">
                        <a href="customers"> <i class="menu-icon fa fa-table"></i>Meter Reading</a>
                    </li>

                    <li>
                        <a href="billing"> <i class="menu-icon fa fa-th"></i>Billing</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Customer List</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">POBLACION</strong>
                            <button type="button" class="btn btn-success rightBtn addCustomerBtn" data-toggle="modal" data-target="#addCustomerModal"><i class="fa fa-magic"></i>&nbsp; Add Customer</button>
                            <!-- data-toggle="modal" data-target="#addCustomerModal" -->
                        </div>
                        <div class="card-body">
                  <table id="" class="table table-striped table-bordered bootstrap-data-table">
                    <thead>
                      <tr>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Previous</th>
                        <th>Present</th>
                        <th>Consumption</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>100</td>
                        <td>101</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Garrett Winters</td>
                        <td>200</td>
                        <td>202</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ashton Cox</td>
                        <td>300</td>
                        <td>301</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">SAGUISE</strong>
                        </div>
                        <div class="card-body">
                  <table id="" class="table table-striped table-bordered bootstrap-data-table">
                    <thead>
                      <tr>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Previous</th>
                        <th>Present</th>
                        <th>Consumption</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>100</td>
                        <td>101</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Garrett Winters</td>
                        <td>200</td>
                        <td>202</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ashton Cox</td>
                        <td>300</td>
                        <td>301</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-success">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('.bootstrap-data-table').DataTable();

          $('.addCustomerBtn').on('click', function(){
            $('.modal-body').load('add');
          }); 
          // $(".standardSelect").chosen({
          //       disable_search_threshold: 10,
          //       no_results_text: "Oops, nothing found!",
          //       width: "100%"
          //   });
        } );

    </script>


</body>
</html>
