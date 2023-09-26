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
                            <h1 class="page-title">User Management</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-user-modal"><i class="icon-plus mx-1"></i>  Add User</button>
            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">User List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Image</th>
                                                        <th class="border-bottom-0">First Name</th>
                                                        <th class="border-bottom-0">Last Name</th>
                                                        <th class="border-bottom-0">Phone Number</th>
                                                        <th class="border-bottom-0">Email</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">View</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Tom</td>
                                                        <td>Super</td>
                                                        <td>Admin</td>
                                                        <td>0764961707</td>
                                                        <td>g@gmail.com</td>
                                                        <td>12/12/2023</td>
                                                        <td>
                                                        <button class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#user-details-modal"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                        </td>

                                                    <td>
                                                    
                                                    <button data-bs-toggle="modal" data-bs-target="#edit-user-modal"  type="button" class="btn btn-icon  btn-github"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                                                    <button data-bs-toggle="modal" data-bs-target="#pass-reset-modal" type="button" class="btn btn-icon  btn-success"><i class="fa fa-key" aria-hidden="true"></i></button>
                                                        
                                                    <button data-bs-toggle="modal" data-bs-target="#page-access-modal" type="button" class="btn btn-icon  btn-warning"><i class="fa fa-file" aria-hidden="true"></i></button>
                                                    
                                                    <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>

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


   <!-- Add User  -->
   <div class="modal fade" id="add-user-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add User</h6>
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

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="recipient-name">
                      </div>

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="recipient-name">
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
                    <button class="btn ripple btn-success mx-1" type="button">Save</button>
                    <button class="btn ripple btn-danger mx-1" data-bs-dismiss="modal" type="button">Close</button>
                </div>


                    </div>
                  </div>
              
            </div>
        </div>
    </div>

    <!-- Edit User  -->
    <div class="modal fade" id="edit-user-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit User</h6>
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
                        <button class="btn ripple btn-info mx-1" type="button">Update</button>
                        <button class="btn ripple btn-danger mx-1" data-bs-dismiss="modal" type="button">Close</button>
                    </div>


                    </div>
                
                  </div>
            </div>
        </div>
    </div>



     <!-- User Details  -->
     <div class="modal fade" id="user-details-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">User Details</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                
                <div class="table-responsive">
                    <table class="table border text-nowrap table-striped text-md-nowrap mb-0">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>4</th>  
                            </tr>

                            <tr>
                                <th>Profile Picture</th>
                                <th><img width="50" src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" /></th>  
                            </tr>

                            <tr>
                                <th>Application ID</th>
                                <th>Mr.</th>  
                            </tr>

                            <tr>
                                <th>First Name</th>
                                <th>Alex</th>  
                            </tr>

                            <tr>
                                <th>Last Name</th>
                                <th>12/12/1993</th>  
                            </tr>

                            <tr>
                                <th>Phone Number</th>
                                <th>Software Engineer</th>  
                            </tr>

                            <tr>
                                <th>Email</th>
                                <th>IT</th>  
                            </tr>

                            <tr>
                                <th>Address</th>
                                <th>QA</th>  
                            </tr>

                            <tr>
                                <th>Country</th>
                                <th>12/12/2020</th>  
                            </tr>

                            <tr>
                                <th>Created Date</th>
                                <th>12/12/2021</th>  
                            </tr>

                            <tr>
                                <th>Modified Date</th>
                                <th>12/12/2021</th>  
                            </tr>

                            <tr>
                                <th>Created By</th>
                                <th>12/12/2021</th>  
                            </tr>

                             <tr>
                                <th>Modified By</th>
                                <th>12/12/2021</th>  
                            </tr>

                        </tbody>
                    </table>
                </div>
                  
                </div>
               
            </div>
        </div>
    </div>


    <!-- Manage Page Access  -->
    <div class="modal fade" id="page-access-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Manage Page Access</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                    <span class="custom-control-label">Check All</span>
                </label>
                
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL</th>
                                <th class="wd-15p border-bottom-0">Page Name</th>
                      
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Admin</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset Allocation Report</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset Category</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset History</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset Status</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset Status Report</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Asset Sub Category</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Comment</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Company Info</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Dashboard</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Department</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Email Setting</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Employee</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Identity Setting</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Login History</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Manage Page Access</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Sub Department</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">Supplier</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">User Management</span>
                                </label>
                                </td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                <span class="custom-control-label">User Profile</span>
                                </label>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <button type="button" class="btn btn-icon  btn-primary">Update</button>
                    
                </div>
                
            </div>
        </div>
    </div>
    

      <!-- Reset Password  -->
      <div class="modal fade" id="pass-reset-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Reset Password</h6>
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

                <button type="button" class="btn btn-icon  btn-primary">Update</button>
                    
                </div>
                
            </div>
        </div>
    </div>
    


   
    <?php require_once '../includes/footer.php' ;?>
