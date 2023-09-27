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
                            <h1 class="page-title">Login History</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login History</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                    <div class="row row-sm">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Login History</h3>
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">ID</th>
                                                        <th class="wd-15p border-bottom-0">User name</th>
                                                        <th class="wd-20p border-bottom-0">Login Time</th>
                                                        <th class="wd-10p border-bottom-0">Public IP</th>
                                                        <th class="wd-25p border-bottom-0">Browser</th>
                                                        <th class="wd-25p border-bottom-0">OS</th>
                                                        <th class="wd-25p border-bottom-0">Device</th>
                                                        <th class="wd-25p border-bottom-0">Action</th>
                                                        <th class="wd-25p border-bottom-0">Action Status</th>
                                                        <th class="wd-25p border-bottom-0">Created Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bella</td>
                                                        <td>Chloe</td>
                                                        <td>System Developer</td>
                                                        <td>2018/03/12</td>
                                                        <td>$654,765</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>b.Chloe@datatables.net</td>
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
