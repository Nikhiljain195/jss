
                <footer class="footer text-right">
                    2016 © Adminto.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="<?php echo base_url();?>assets/admin/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="<?php echo base_url();?>assets/admin/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/admin/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url();?>assets/admin/plugins/morris/morris.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url();?>assets/admin/pages/jquery.dashboard.js"></script>

       
        <!-- Datatables-->
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.scroller.min.js"></script>



        <!-- App js -->
        <script src="<?php echo base_url();?>assets/admin/js/jquery.core.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/jquery.app.js"></script>


          <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

    </body>
</html>