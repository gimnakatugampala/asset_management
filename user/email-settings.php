<?php require_once '../includes/header.php' ;?>

<style>
    .dt-buttons.btn-group{
        position: relative;     
    }
</style>

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <?php require_once '../includes/top-header.php' ;?>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <?php require_once '../includes/sidebar.php' ;?>
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Email Settings</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Email Settings</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                    <div class="row row-sm">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Email Settings</h3>
                                </div>
                                <div class="card-body">

                                <div class="table-responsive my-2">
                                    <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <tbody>
                                            
                                            <tr>
                                                <th>Username</th>
                                                <td>g@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Host(SMTP)</th>
                                                <td>smtp.gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Port(SMTP)</th>
                                                <td>587</td>
                                            </tr>

                                            <tr>
                                                <th>From Email</th>
                                                <td>gimna@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>From Full Name</th>
                                                <td>Web Admin Notification</td>
                                            </tr>

                                            <tr>
                                                <th></th>
                                                <td>
                                                <button data-bs-toggle="modal" data-bs-target="#emtp-edit-modal" type="button" class="btn btn-icon  btn-primary">Edit</button>
                                                <button data-bs-toggle="modal" data-bs-target="#emtp-details-modal" type="button" class="btn btn-icon  btn-primary">Details</button>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                    


                            
                                    
                        </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Send Grid Settings</h3>
                                </div>
                                <div class="card-body">

                                <div class="table-responsive my-2">
                                    <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <tbody>
                                            
                                            <tr>
                                                <th>Send Grid User</th>
                                                <td>g@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Send Grid Key</th>
                                                <td>smtp.gmail.com</td>
                                            </tr>

                                           

                                            <tr>
                                                <th>From Email</th>
                                                <td>gimna@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>From Full Name</th>
                                                <td>Web Admin Notification</td>
                                            </tr>

                                            <tr>
                                                <th></th>
                                                <td>
                                                <button data-bs-toggle="modal" data-bs-target="#sendgrid-modal" type="button" class="btn btn-icon  btn-primary">Edit</button>
                                                <button data-bs-toggle="modal" data-bs-target="#sendgrid-details-modal" type="button" class="btn btn-icon  btn-primary">Details</button>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                    


                            
                                    
                        </div>
                        </div>
                    </div>
        
                    </div>

                   
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

    </div>



    <!-- Email Setting / Edit -->
    <div class="modal fade" id="emtp-edit-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit SMTP Email Setting</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                <div class="mb-3">
                    <label class="col-md-3 form-label">Username</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>

                <div class="mb-3">
                    <label class="col-md-3 form-label">Password</label>
                    <div class="col-md-12">
                        <input type="password" class="form-control" >
                    </div>
                </div>


                <div class="mb-3">
                    <label class="col-md-3 form-label">Host(SMTP)</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>

                <div class="mb-3">
                    <label class="col-md-3 form-label">Port(SMTP)</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>

                <div class="m-3">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                    <span class="custom-control-label">SSL EEnabled</span>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="col-md-3 form-label">From Email</label>
                    <div class="col-md-12">
                        <input type="email" class="form-control" >
                    </div>
                </div>

                <div class="mb-3">
                    <label class="col-md-5 form-label">From Full Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>

                <div class="m-3">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                    <span class="custom-control-label">Is Default</span>
                    </label>
                </div>

                <div>
                    <button type="button" class="btn btn-icon  btn-success">Save</button>
                    <button type="button" class="btn btn-icon  btn-danger">Close</button>
                </div>


                </div>
              
            </div>
        </div>
    </div>


   <!-- Send Grid Setting / Edit -->
   <div class="modal fade" id="sendgrid-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Send Grid Setting</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                <div class="mb-3">
                    <label class="col-md-5 form-label">Send Grid User</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>

             


                <div class="mb-3">
                    <label class="col-md-3 form-label">Send Grid Key</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>


                <div class="mb-3">
                    <label class="col-md-3 form-label">From Email</label>
                    <div class="col-md-12">
                        <input type="email" class="form-control" >
                    </div>
                </div>

                <div class="mb-3">
                    <label class="col-md-5 form-label">From Full Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" >
                    </div>
                </div>


                <div>
                    <button type="button" class="btn btn-icon  btn-success">Save</button>
                    <button type="button" class="btn btn-icon  btn-danger">Close</button>
                </div>


                </div>
              
            </div>
        </div>
    </div>


<!-- SMTP Details  -->
<div class="modal fade" id="emtp-details-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">SMTP Email Setting Details</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                                <div class="table-responsive my-2">
                                    <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <tbody>
                                            
                                            <tr>
                                                <th>Username</th>
                                                <td>g@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Host(SMTP)</th>
                                                <td>smtp.gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Port(SMTP)</th>
                                                <td>587</td>
                                            </tr>

                                            <tr>
                                                <th>From Email</th>
                                                <td>gimna@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>From Full Name</th>
                                                <td>Web Admin Notification</td>
                                            </tr>

                                           
                                           
                                        </tbody>
                                    </table>
                                </div>

                </div>
              
            </div>
        </div>
</div>


<!-- Send Grid Details  -->
<div class="modal fade" id="sendgrid-details-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Grid Setting Details</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                <div class="table-responsive my-2">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                <tbody>
                                
                                <tr>
                                    <th>Send Grid User</th>
                                    <td>g@gmail.com</td>
                                </tr>

                                
                                <tr>
                                    <th>Send Grid Key</th>
                                    <td>smtp.gmail.com</td>
                                </tr>

                                

                                <tr>
                                    <th>From Email</th>
                                    <td>gimna@gmail.com</td>
                                </tr>

                                
                                <tr>
                                    <th>From Full Name</th>
                                    <td>Web Admin Notification</td>
                                </tr>

                                
                                
                            </tbody>
                        </table>
                    </div>

                </div>
              
            </div>
        </div>
</div>

    


   
    <?php require_once '../includes/footer.php' ;?>
