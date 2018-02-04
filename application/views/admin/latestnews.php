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
                                        <h3 class="panel-title">Slider Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1">
                                            <form class="form-horizontal" role="form">

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Choose Date</label>
                                                    <div class="col-md-10">
                                                        <input type="date"></input>   
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Text</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="Some text value...">
                                                    </div>
                                                </div>

                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Choose Images</label>
                                                    <div class="col-md-10">
                                                        <input type="file"></input>
                                                        
                                                    </div>
                                                </div>
                                                <textarea class="ckeditor" name="editor1"></textarea>
                                               <script>
                                                    CKEDITOR.replace( 'editor1' );
                                               </script>
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
                                                <th>Name</th>
                                                <th>Text 1</th>
                                                <th>Text 2</th>
                                                <th>Text 3</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                                                                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td class="actions">
                                                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                 </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td class="actions">
                                                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                 </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
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
              $('.page-title').text('News & Events')
            }); 
  </script>                       