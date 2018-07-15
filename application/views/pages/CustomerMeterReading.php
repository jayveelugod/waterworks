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
                        <h1>Customer Meter Reading</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <?php
                    foreach ($barangayList as $brgyKey) {
                        echo ' <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">'.strtoupper($brgyKey->name).'</strong>
                                        <button type="button" class="btn btn-success rightBtn addCustomerBtn" data-toggle="modal" data-target="#addCustomerModal" onclick="loadModal(\''.$brgyKey->id.'\', \''.$brgyKey->name.'\');"><i class="fa fa-magic"></i>&nbsp; Add Customer</button>
                                    </div>
                                    <div class="card-body">
                              <table id="" class="table table-striped table-bordered bootstrap-data-table">
                                <thead>
                                  <tr>
                                    <th>Account Number</th>
                                    <th class="nameCol">Name</th>
                                    <th class="readingCol">Previous</th>
                                    <th class="readingCol">Present</th>
                                    <th class="readingCol">Consumption</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>';
                        foreach ($customerList[$brgyKey->name] as $key) {
                            echo '<tr>';
                            echo '<td>'.$key->account_number.'</td>';
                            echo '<td>'.$key->name.'</td>';
                            echo '<td class="readingCol" contenteditable>200</td>';
                            echo '<td class="readingCol">201</td>';
                            echo '<td class="readingCol">1</td>';
                            echo '<td> <button type="button" onclick="editReadings(\''.$key->account_number.'\')" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Edit</button></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>
                              </table>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
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
        });

        function loadModal(id, name) {
            $('.modal-dialog').load('modal/' + id + '/' + name);
        }

        function editReadings(account_number) {
            console.log(account_number)
        }

    </script>


</body>
</html>
