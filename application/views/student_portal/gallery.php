<?php include "header.php"; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
    

                               <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Add Image</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1">
                                            <form class="form-horizontal" role="form">
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Choose Images</label>
                                                    <div class="col-md-10">
                                                        <input type="file"></input><br><br>
                                                        
                                                
                                                    <button class="btn btn-success waves-effect waves-light btn-sm" id="success-alert">Submit</button>
                                                

                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- end col -->
                                    </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                     </div>
                
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                   
                                    <h4 class="header-title m-t-0 m-b-30">Details</h4>

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL.No</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                                                                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>System Architect</td>
                                                <td class="actions">
                                                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                 </td>
                                            </tr>
                                            
                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                 </div>   
               </div>   
<?php include "footer.php"; ?>

  <script type="text/javascript">
            $(document).ready(function() {
              $('.page-title').text('Gallery')
            }); 
  </script>                       