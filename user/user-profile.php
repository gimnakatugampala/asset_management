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
                            <h1 class="page-title">User Profile</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                    <div class="row row-sm">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">User Profile</h3>
                                </div>
                                <div class="card-body">

                                <div class="table-responsive my-2">
                                    <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <tbody>
                                            
                                            <tr>
                                                <th>ID</th>
                                                <td>2</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Profile Picture</th>
                                                <td>smtp.gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Application User ID</th>
                                                <td>587</td>
                                            </tr>

                                            <tr>
                                                <th>First Name</th>
                                                <td>Test</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Last Name</th>
                                                <td>Web Admin Notification</td>
                                            </tr>

                                            <tr>
                                                <th>Phone Number</th>
                                                <td>0764961707</td>
                                            </tr>

                                            <tr>
                                                <th>Email</th>
                                                <td>dev@gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Address</th>
                                                <td>Sri Lanka</td>
                                            </tr>

                                            <tr>
                                                <th>Country</th>
                                                <td>Sri Lanka</td>
                                            </tr>

                                            <tr>
                                                <th>Created Date</th>
                                                <td>18/08/2023</td>
                                            </tr>

                                            <tr>
                                                <th>Modified Date</th>
                                                <td>18/08/2023</td>
                                            </tr>

                                            <tr>
                                                <th>Created By</th>
                                                <td>admin@gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Modified By</th>
                                                <td>admin@gmail.com</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <button data-bs-toggle="modal" data-bs-target="#edit-user-profile-modal" type="button" class="btn btn-icon  btn-primary">Edit User Profile</button>
                                <button data-bs-toggle="modal" data-bs-target="#reset-password-modal" type="button" class="btn btn-icon  btn-primary">Reset Password</button>
                            
                                    
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






   
    <!-- Edit User Profile -->
    <div class="modal fade" id="edit-user-profile-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User Profile</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">
                    
                <div class="row">
                        <div class="col-md-6">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">First Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Last Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Phone Number</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>

                    

                        </div>

                    <div class="col-md-6">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Address</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>

                      <div class="form-group mb-3">
                        <label class="form-label">Country</label>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                <option value="br">Brazil</option>
                                <option value="cz">Czech Republic</option>
                                <option value="de">Germany</option>
                                <option value="pl" selected>Poland</option>
                            </select>
                    </div>

                    <div class="mb-3">
                         <label class="form-label">Image URL</label>
                        <input type="file" class="dropify" data-bs-height="180">
                    </div>

                    </div>


                <div class="d-flex justify-content-center">
                    <button class="btn ripple btn-success mx-1" type="button">Edit</button>
                    <button class="btn ripple btn-danger mx-1" data-bs-dismiss="modal" type="button">Close</button>
                </div>


                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- Reset Password -->
    <div class="modal fade" id="reset-password-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset Password</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">

                <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="recipient-name">
                      </div>


                <div class="d-flex justify-content-center">
                    <button class="btn ripple btn-success mx-1" type="button">Save</button>
                    <button class="btn ripple btn-danger mx-1" data-bs-dismiss="modal" type="button">Close</button>
                </div>

                </div>
            </div>
        </div>
    </div>


    


   
    <?php require_once '../includes/footer.php' ;?>
