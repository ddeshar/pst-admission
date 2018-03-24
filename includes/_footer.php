</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="assets/js/components.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

    <script type="text/javascript" src="./assets/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./assets/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    
    <script type="text/javascript" src="./assets/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    
    <script type="text/javascript">
        $.Thailand({
            database: './assets/jquery.Thailand.js/database/geodb.json', 

            $district: $('#address_tambol'),
            $amphoe: $('#address_district'),
            $province: $('#address_provience'),
            $zipcode: $('#address_zip'),

            onDataFill: function(data){
                console.log(data);
            }
        });
        
        $.Thailand({
            database: './assets/jquery.Thailand.js/database/geodb.json', 

            $district: $('#wat_tambol'),
            $amphoe: $('#wat_district'),
            $province: $('#wat_provience'),
            $zipcode: $('#wat_postal'),

            onDataFill: function(data){
                console.log(data);
            }
        });

        $.Thailand({
            database: './assets/jquery.Thailand.js/database/geodb.json', 

            $district: $('#school_tambol'),
            $amphoe: $('#school_district'),
            $province: $('#school_provience'),

            onDataFill: function(data){
                console.log(data);
            }
        });

        $.Thailand({
            database: './assets/jquery.Thailand.js/database/geodb.json', 

            $district: $('#naktham_tambol'),
            $amphoe: $('#naktham_district'),
            $province: $('#naktham_provience'),

            onDataFill: function(data){
                console.log(data);
            }
        });

        $.Thailand({
            database: './assets/jquery.Thailand.js/database/geodb.json', 

            $district: $('#pali_tambol'),
            $amphoe: $('#pali_district'),
            $province: $('#pali_provience'),

            onDataFill: function(data){
                console.log(data);
            }
        });
    </script>

<!-- end of global scripts-->
<?=$global_scripts_js?>
</body>
</html>