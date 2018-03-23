<?php
if (isset($_GET['source'])) { $source = $_GET['source'];
} else { $source = ''; }

if ($source == "add" || $source == "edit") {
    $global_scripts_css = <<<EOD
    <!--Plugin styles-->
        <link type="text/css" rel="stylesheet" href="assets/vendors/inputlimiter/css/jquery.inputlimiter.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/chosen/css/chosen.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/jquery-tagsinput/css/jquery.tagsinput.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/daterangepicker/css/daterangepicker.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/datepicker/css/bootstrap-datepicker.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/vendors/fileinput/css/fileinput.min.css"/>
    <!--End of plugin styles-->

    <!--Page level styles-->
        <link type="text/css" rel="stylesheet" href="assets/css/pages/form_elements.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/pages/wizards.css"/> 
    <!-- end page level scripts -->
EOD;
    $global_scripts_js = <<<EOD
    <!-- plugin level scripts -->
        <script type="text/javascript" src="assets/vendors/jquery.uniform/js/jquery.uniform.js"></script>
        <script type="text/javascript" src="assets/vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
        <script type="text/javascript" src="assets/vendors/chosen/js/chosen.jquery.js"></script>
        <script type="text/javascript" src="assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script type="text/javascript" src="assets/vendors/jquery-tagsinput/js/jquery.tagsinput.js"></script>
        <script type="text/javascript" src="assets/vendors/validval/js/jquery.validVal.min.js"></script>
        <script type="text/javascript" src="assets/vendors/moment/js/moment.min.js"></script>
        <script type="text/javascript" src="assets/vendors/daterangepicker/js/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="assets/vendors/autosize/js/jquery.autosize.min.js"></script>
        <script type="text/javascript" src="assets/vendors/inputmask/js/inputmask.js"></script>
        <script type="text/javascript" src="assets/vendors/inputmask/js/jquery.inputmask.js"></script>
        <script type="text/javascript" src="assets/vendors/inputmask/js/inputmask.date.extensions.js"></script>
        <script type="text/javascript" src="assets/vendors/inputmask/js/inputmask.extensions.js"></script>
        <script type="text/javascript" src="assets/vendors/fileinput/js/fileinput.min.js"></script>
        <script type="text/javascript" src="assets/vendors/fileinput/js/theme.js"></script>

        <script type="text/javascript" src="assets/js/form.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_elements.js"></script>

        <script type="text/javascript" src="assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
        <script type="text/javascript" src="assets/vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js"></script>
    <!--End of plugin scripts-->

    <!--Page level scripts-->
        <script type="text/javascript" src="assets/js/pages/wizard.js"></script>
    <!-- end page level scripts -->
EOD;
} else if ($source == "profile"){
    $global_scripts_css = <<<EOD
    <!--Plugin css-->
    <link type="text/css" rel="stylesheet" href="assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <!--End off plugin css-->
    <!--Page level css-->
    <link type="text/css" rel="stylesheet" href="assets/css/pages/profile.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/pages/gallery.css"/>    
    <!--end of page level css-->
EOD;
    $global_scripts_js = <<<EOD
 
EOD;

} else {
    $global_scripts_css = <<<EOD
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="assets/vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="assets/css/pages/tables.css" />
EOD;
    $global_scripts_js = <<<EOD
    <script type="text/javascript" src="assets/vendors/select2/js/select2.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendors/datatables/js/buttons.print.min.js"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="assets/js/pages/users.js"></script>
EOD;
}