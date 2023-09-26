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
                            <h1 class="page-title">Manage Supplier</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Supplier</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-supplier-modal"><i class="icon-plus mx-1"></i>  Add Supplier</button>
            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Supplier List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Name</th>
                                                        <th class="border-bottom-0">Contact Person</th>
                                                        <th class="border-bottom-0">Email</th>
                                                        <th class="border-bottom-0">Phone</th>
                                                        <th class="border-bottom-0">Address</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>PHP</td>
                                                        <td>TBD</td>
                                                        <td>gimna@gmail.com</td>
                                                        <td>083873432</td>
                                                        <td>Sri Lanka</td>
                                                        <td>12/12/2023</td>
                                                        <td>
                                                        <button data-bs-toggle="modal" data-bs-target="#edit-supplier-modal" type="button" class="btn btn-icon  btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>

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


   <!-- Add Supplier  -->
   <div class="modal fade" id="add-supplier-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Supplier</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Contact Person</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    </div>

                    <div class="col-md-6">

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Email</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Phone</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>


                    </div>
                </div>
                 
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Supplier  -->
    <div class="modal fade" id="edit-supplier-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Supplier</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Contact Person</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    </div>

                    <div class="col-md-6">

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Email</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="col-md-3 form-label">Phone</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>


                    </div>
                </div>

                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>



   
    <?php require_once '../includes/footer.php' ;?>