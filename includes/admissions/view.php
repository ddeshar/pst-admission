<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-header bg-white">
                User Grid
            </div>
            <div class="card-block m-t-35" id="user_body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="admission.php?source=add" id="editable_table_new" class=" btn btn-default">
                        Add student  <i class="fa fa-plus"></i>
                    </a>
                    </div>
                    <div class="btn-group float-right users_grid_tools">
                        <div class="tools"></div>
                    </div>
                </div>
                <div>
                    <div>
                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Gender</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Breanna15</td>
                                    <td>Breanna.Ratke@hotmail.com</td>
                                    <td>Male</td><td class="center">North Jadaton</td>
                                    <td class="center">Approved</td>
                                    <td>
                                        <a href="admission.php?source=profile" data-toggle="tooltip" data-placement="top" title="View User">
                                            <i class="fa fa-eye text-success"></i>
                                        </a>&nbsp; &nbsp;
                                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="admission.php?source=edit">
                                            <i class="fa fa-pencil text-warning"></i>
                                        </a>&nbsp; &nbsp;
                                        <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete_user.html">
                                            <i class="fa fa-trash text-danger"></i>
                                    </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
