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
                            <h1 class="page-title">Manage Employee</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Employee</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-employee-modal"><i class="icon-plus mx-1"></i>  Add Employee</button>
            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Employee List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Employee ID</th>
                                                        <th class="border-bottom-0">First Name</th>
                                                        <th class="border-bottom-0">Last Name</th>
                                                        <th class="border-bottom-0">Date of Birth</th>
                                                        <th class="border-bottom-0">Designation</th>
                                                        <th class="border-bottom-0">Department</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>34343</td>
                                                        <td>Mr</td>
                                                        <td>Merry</td>
                                                        <td>12/12/2021</td>
                                                        <td>QA</td>
                                                        <td>IT</td>
                                                        <td>
                                                        <button data-bs-toggle="modal" data-bs-target="#detail-employee-modal" type="button" class="btn btn-icon  btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                        
                                                        <button data-bs-toggle="modal" data-bs-target="#edit-employee-modal" type="button" class="btn btn-icon  btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                                                        <button  type="button" class="btn btn-icon  btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>

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


    <!-- Add Employee Status -->
    <div class="modal fade" id="add-employee-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Asset Status</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Employee Status -->
    <div class="modal fade" id="edit-employee-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Asset Status</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>


     <!-- Employee Details Modal -->
     <div class="modal fade" id="detail-employee-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Employee Details</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                
                <div class="card">
                    <div class="card-body">

                    <div class="panel panel-primary">
                            <div class="tab-menu-heading tab-menu-heading-boxed">
                                <div class="tabs-menu tabs-menu-border">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab1" class="active" data-bs-toggle="tab">Employee Details</a></li>
                                        <li><a href="#tab2" data-bs-toggle="tab">Assigned Assets</a></li>
                                        <li><a href="#tab3" data-bs-toggle="tab">Asset History</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">

                                    <div class="table-responsive">
                                                <table class="table border text-nowrap table-striped text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>4</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Employee ID</th>
                                                            <th>634758</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>First Name</th>
                                                            <th>Mr.</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Last Name</th>
                                                            <th>Alex</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Date Of Birth</th>
                                                            <th>12/12/1993</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Designation</th>
                                                            <th>Software Engineer</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Department</th>
                                                            <th>IT</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Sub Department</th>
                                                            <th>QA</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Joining Date</th>
                                                            <th>12/12/2020</th>  
                                                        </tr>

                                                         <tr>
                                                            <th>Leaving Date</th>
                                                            <th>12/12/2021</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Phone</th>
                                                            <th>3543534534</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Email</th>
                                                            <th>example@gmail.com</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Address</th>
                                                            <th>Netherland</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Created Date</th>
                                                            <th>12/12/2021</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Modified Date</th>
                                                            <th>12/12/2021</th>  
                                                        </tr>
    
                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>

                                    <div class="tab-pane" id="tab2">
                                       
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Asset ID</th>
                                                    <th>Name</th>
                                                    <th>Asset Model No</th>
                                                    <th>Date Of Purchase</th>
                                                    <th>Modified Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ID-009</td>
                                                    <td>Samsung Note</td>
                                                    <td>SamsungNote123</td>
                                                    <td>29 December 2021</td>
                                                    <td>01 January 2021</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>

                                    <div class="tab-pane" id="tab3">

                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Asset ID</th>
                                                    <th>Assign Employee</th>
                                                    <th>Action</th>
                                                    <th>Note</th>
                                                    <th>Created Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>7</td>
                                                    <td>Mr. Alex</td>
                                                    <td>Ussigned Emplyee Assigned to Employee </td>
                                                    <td></td>
                                                    <td>01 January 2021</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                               
                                </div>
                                </div>
                            </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
   

   
    <?php require_once '../includes/footer.php' ;?>
