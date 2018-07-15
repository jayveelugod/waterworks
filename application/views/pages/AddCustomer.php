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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='assets/css/googleFonts.css' rel='stylesheet' type='text/css'>

</head>
<body>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <span class="successMessage">Customer <strong></strong> added!</span>
            <form id="addCustomerForm" name="addCustomerForm">
                <?php 
                    if (sizeof($latest_acct_number) > 0) {
                        echo '<input type="hidden" id="account_number" value="'.$latest_acct_number[0]->account_number.'">';
                    }else{
                        echo '<input type="hidden" id="account_number" value="0001">';
                    } 
                ?>
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="customerForm">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Customer Information</strong>
                                    </div>
                                    <div class="card-body card-block">  
                                        <div class="form-group">
                                            <label class=" form-control-label">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                                <input class="form-control" placeholder="Firstname" required name="firstname" id="firstname">
                                                &nbsp;&nbsp;&nbsp;
                                                <input class="form-control" placeholder="Lastname"
                                                required name="lastname" id="lastname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body card-block" >
                                        <div class="divInlineBlockForm">
                                            <label class=" form-control-label">Barangay</label>
                                            <div class="input-group">
                                                <input class="form-control barangay" id="<?php echo $brgy_id; ?>" name="barangay" disabled value="<?php echo $brgy_name; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="divInlineBlockForm">
                                            <label class=" form-control-label">Year</label>
                                            <div class="input-group">
                                                <select data-placeholder="Choose a Year..." class="standardSelect" tabindex="1" id="year" name="year">
                                                    <option value="2018" selected>2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });

            jQuery(".successMessage").hide();

            jQuery("#addCustomerForm").on('submit', function(e){
                e.preventDefault();
                var account_number = parseInt($('#account_number').val().split('-')[1]) + 1;
                account_number = $('#account_number').val().split('-')[0] + '-' + account_number;
                var customerData = {
                            name: jQuery("#firstname").val() + ' ' + jQuery("#lastname").val(),
                            account_number: account_number,
                            barangay: parseInt($('.barangay').attr('id')),
                            year: jQuery("#year").val()
                        };

                $.ajax({
                    url: 'add',
                    method: 'POST',
                    data: customerData,
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        jQuery('.successMessage strong').get(0).innerText = jQuery("#firstname").val() + ' ' + jQuery("#lastname").val();
                        jQuery(".successMessage").show();
                        setTimeout(function(){
                            location.reload();
                        }, 1200);
                    }
                });
            });

            // function generateAccountNumber(data) {
            //     switch(data) {
            //         case 1: 
            //     }
            // }
        });
    </script>

</body>
</html>
