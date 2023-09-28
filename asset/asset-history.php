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
                            <h1 class="page-title">Asset History</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Asset History</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Asset History</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Asset ID</th>
                                                        <th class="border-bottom-0">Assign Employee</th>
                                                        <th class="border-bottom-0">Action</th>
                                                        <th class="border-bottom-0">Note</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>7-Details</td>
                                                        <td>Mr.Tom</td>
                                                        <td>Asset Updated</td>
                                                        <td></td>
                                                        <td>25 December 2021</td>
                                                        <td><button data-bs-toggle="modal" data-bs-target="#asset-details-modal" type="button" class="btn btn-icon  btn-github"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
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

  <!-- Asset Details  -->
  <div class="modal fade" id="asset-details-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Asset Details</h6>
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
                                        <li><a href="#tab51" class="active" data-bs-toggle="tab">Asset Info</a></li>
                                        <li><a href="#tab52" data-bs-toggle="tab">Assignee Info</a></li>
                                        <li><a href="#tab53" data-bs-toggle="tab">Asset History</a></li>
                                        <li><a href="#tab54" data-bs-toggle="tab">Comment History</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab51">

                                    <div class="table-responsive">
                                                <table class="table border text-nowrap table-striped text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>4</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Asset ID</th>
                                                            <th>634758</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Asset QR Code</th>
                                                            <th><img width="40" src="../assets/images/asset-image/asset_qr.png" /></th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Asset Model No.</th>
                                                            <th>Mr.</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Alex</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Description</th>
                                                            <th>12/12/1993</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Category</th>
                                                            <th>Software Engineer</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Sub Category</th>
                                                            <th>IT</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Quantity</th>
                                                            <th>QA</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Unity Price</th>
                                                            <th>12/12/2020</th>  
                                                        </tr>

                                                         <tr>
                                                            <th>Supplier</th>
                                                            <th>12/12/2021</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Location</th>
                                                            <th>3543534534</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Department</th>
                                                            <th>example@gmail.com</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Sub Department</th>
                                                            <th>Netherland</th>  
                                                        </tr>

    
                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>

                                    <div class="tab-pane" id="tab52">
                                       
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

                                    <div class="tab-pane" id="tab53">

                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Assign Employee</th>
                                                    <th>Action</th>
                                                    <th>Note</th>
                                                    <th>Created Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mr. Alex</td>
                                                    <td>Ussigned Emplyee Assigned to Employee </td>
                                                    <td></td>
                                                    <td>01 January 2021</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="tab54">

                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Comment</th>
                                                    <th>Comment By</th>
                                                    <th>Comment Date</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>7</td>
                                                    <td>Mr. Alex</td>
                                                    <td><button class="btn btn-danger"> <i class="fe fe-trash-2"></i></button></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row my-5">
                                        <div class="col-md-12">
                                            <label>Comment Message</label>
                                            <textarea class="form-control mb-4" placeholder="Textarea" rows="4"></textarea>
                                            <button type="button" class="btn btn-icon  btn-primary">Add Comment</button>
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
</div>


   
    <?php require_once '../includes/footer.php' ;?>
