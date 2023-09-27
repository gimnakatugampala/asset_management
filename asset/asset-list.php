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
                            <h1 class="page-title">Asset List</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Asset</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->


                        <!-- Content -->
                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-asset-modal"><i class="icon-plus mx-1"></i>  Add Asset</button>

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Asset List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">Image</th>
                                                        <th class="border-bottom-0">Asset Modal No</th>
                                                        <th class="border-bottom-0">Name</th>
                                                        <th class="border-bottom-0">Unit Price</th>
                                                        <th class="border-bottom-0">Date Purchase</th>
                                                        <th class="border-bottom-0">Assign Employee</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                        <th class="border-bottom-0">Print</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-bs-toggle="modal" data-bs-target="#qr-code"> <img  width="40" src="../assets/images/asset-image/asset_qr.png" /></td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>

                                                        <button data-bs-toggle="modal" data-bs-target="#emp-modal" data-bs-whatever="@mdo1" type="button" class="btn btn-icon  btn-success text-center"><i class="fa fa-handshake-o" aria-hidden="true"></i></button> Unassigned</td>

                                                        <td>  
                                                        
                                                        <button data-bs-toggle="modal" data-bs-target="#asset-details-modal" type="button" class="btn btn-icon  btn-github"><i class="fa fa-eye" aria-hidden="true"></i></button>
            

                                                        <button data-bs-toggle="modal" data-bs-target="#allocate-modal" data-bs-whatever="@mdo" type="button" class="btn btn-icon  btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                        
                                                        <button data-bs-toggle="modal" data-bs-target="#edit-asset-modal"  type="button" class="btn btn-icon  btn-secondary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                        
                                                        <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                                        </td>

                                                        <td>
                                                        <span class="dropdown">
                                                        <button class="btn btn-icon  btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-print" aria-hidden="true"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="../asset/asset-qr-code.php">QR Code</a></li>
                                                            <li><a class="dropdown-item" href="../asset/asset-print.php">Detail Invoice</a></li>
                                                        </ul>
                                                        </span>
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


    <!-- Allocate Modal -->
    <div class="modal fade" id="allocate-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Asset Assign</h6>
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
                                        <li><a href="#tab29" class="active" data-bs-toggle="tab">Basic Info</a></li>
                                        <li><a href="#tab30" data-bs-toggle="tab">Other Info</a></li>
                                        <li><a href="#tab31" data-bs-toggle="tab">Asset Assign</a></li>
                                        <li><a href="#tab32" data-bs-toggle="tab">Comment History</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab29">

                                    <div class="row">
                                <div class="col-md-6">

                                     <div class="mb-4">
                                    <label class="col-md-3 form-label">QR Code</label>
                                       <img width="100" src="../assets/images/asset-image/asset_qr.png" />
                                    </div>


                                    
                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Model No</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Unit Price</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-4 form-label">Date Of Purchase</label>
                                        <div class="col-md-8">
                                        <input class="form-control" placeholder="MM/DD/YYYY" type="date">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Status</label>
                                        <div class="col-md-9">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Supplier</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                   <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                           
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger mx-2">Save</button>
                                    <button type="button" class="btn btn-info mx-2">Cancel</button>
                                </div>

                                


                           </div>

                                    </div>
                                    <div class="tab-pane" id="tab30">
                                        
                                    <div class="row">

                                    <div class="col-md-12">

                                    <div class="mb-4">
                                            <label class="col-md-3 form-label">Location</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="col-md-3 form-label">Image URL</label>
                                            <div class="col-md-9">
                                            <input type="file" class="dropify" data-bs-height="180">
                                            </div>
                                        </div>


                                        <div class="mb-4">
                                            <label class="col-md-3 form-label">Remark</label>
                                            <div class="col-md-9">
                                            <textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-danger mx-2">Save</button>
                                        <button type="button" class="btn btn-info mx-2">Cancel</button>
                                    </div>

                                    </div>
                                    
                                    </div>
                                    <div class="tab-pane" id="tab31">
                                    <!-- <div class="form-group"> -->
                                            <!-- <label class="form-label">Customize Select</label> -->
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Assign Employee</label>
                                                <div class="col-md-9">
                                                <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-primary m-2">Save</button>

                                                <button class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                                            </div>

                                           
                                        <!-- </div> -->
                                    </div>
                                    <div class="tab-pane" id="tab32">
                                        
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


       <!-- Employee Details Modal -->
       <div class="modal fade" id="emp-modal">
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


<!-- Add Asset  -->
<div class="modal fade" id="add-asset-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Asset</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body">
                    
                <div class="panel panel-primary">
                <div class="tab-menu-heading">
                    <div class="tabs-menu">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs panel-info">
                            <li><a href="#tab40" class="active" data-bs-toggle="tab">Basic Info</a></li>
                            <li><a href="#tab41" data-bs-toggle="tab">Other Info</a></li>
                            <li><a href="#tab42" data-bs-toggle="tab">Asset Assign</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab40">

                           <div class="row">
                                <div class="col-md-6">

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">QR Code</label>
                                       <img width="100" src="../assets/images/asset-image/asset_qr.png" />
                                    </div>


                                    
                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Model No</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Unit Price</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-4 form-label">Date Of Purchase</label>
                                        <div class="col-md-8">
                                        <input class="form-control" placeholder="MM/DD/YYYY" type="date">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Status</label>
                                        <div class="col-md-9">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Supplier</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                   <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                           
                                </div>
                        
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger mx-2">Save</button>
                                    <button type="button" class="btn btn-info mx-2">Cancel</button>
                                </div>

                                


                           </div>

                        </div>
                        <div class="tab-pane" id="tab41">

                            <div class="row">


                                <div class="col-md-12">

                                <div class="mb-4">
                                        <label class="col-md-3 form-label">Location</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Image URL</label>
                                        <div class="col-md-9">
                                        <input type="file" class="dropify" data-bs-height="180">
                                        </div>
                                    </div>


                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Remark</label>
                                        <div class="col-md-9">
                                        <textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>


                                   <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger mx-2">Save</button>
                                    <button type="button" class="btn btn-info mx-2">Cancel</button>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tab42">

                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Assign Asset</label>
                            <div class="col-md-9">
                            <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                <option value="br">Brazil</option>
                                <option value="cz">Czech Republic</option>
                                <option value="de">Germany</option>
                                <option value="pl" selected>Poland</option>
                            </select>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary m-2">Save</button>

                            <button class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                     
                    </div>
                </div>
            </div>
                
                </div>
            </div>
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

                                                        <tr>
                                                            <th>Warrenty In Month</th>
                                                            <th>12/12/2021</th>  
                                                        </tr>

                                                        <tr>
                                                            <th>Depresciation In Month</th>
                                                            <th>12/12/2021</th>  
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


<!-- Asset QR Code -->
    <div class="modal fade" id="qr-code" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">QR Code</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
                </div>
                <div class="modal-body text-center">
                <img  width="45%"  src="../assets/images/asset-image/asset_qr.png" />
                </div>
               
            </div>
        </div>
    </div>

<!-- Edit Asset -->
<div class="modal fade" id="edit-asset-modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Asset</h6>
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
                                        <li><a href="#tab69" class="active" data-bs-toggle="tab">Basic Info</a></li>
                                        <li><a href="#tab60" data-bs-toggle="tab">Other Info</a></li>
                                        <li><a href="#tab61" data-bs-toggle="tab">Asset Assign</a></li>
                                        <li><a href="#tab62" data-bs-toggle="tab">Comment History</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab69">
                                    <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-4">
                                    <label class="col-md-3 form-label">QR Code</label>
                                       <img width="100" src="../assets/images/asset-image/asset_qr.png" />
                                    </div>

                                    
                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Model No</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-3 form-label">Unit Price</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="col-md-4 form-label">Date Of Purchase</label>
                                        <div class="col-md-8">
                                        <input class="form-control" placeholder="MM/DD/YYYY" type="date">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                <div class="mb-4">
                                        <label class="col-md-3 form-label">Asset Status</label>
                                        <div class="col-md-9">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Category</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Supplier</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="col-md-3 form-label">Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                   <div class="mb-4">
                                    <label class="col-md-3 form-label">Sub Department</label>
                                    <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- SELECT --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                           
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger mx-2">Save</button>
                                    <button type="button" class="btn btn-info mx-2">Cancel</button>
                                </div>

                                


                           </div>
                                    

                                    </div>
                                    <div class="tab-pane" id="tab60">
                                     
                                    
                                    <div class="row">   

                                        <div class="col-md-12">

                                        <div class="mb-4">
                                                <label class="col-md-3 form-label">Location</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="col-md-3 form-label">Image URL</label>
                                                <div class="col-md-9">
                                                <input type="file" class="dropify" data-bs-height="180">
                                                </div>
                                            </div>


                                            <div class="mb-4">
                                                <label class="col-md-3 form-label">Remark</label>
                                                <div class="col-md-9">
                                                <textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-danger mx-2">Save</button>
                                            <button type="button" class="btn btn-info mx-2">Cancel</button>
                                        </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab61">
                                    <!-- <div class="form-group"> -->
                                            <!-- <label class="form-label">Customize Select</label> -->
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Assign Employee</label>
                                                <div class="col-md-9">
                                                <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-primary m-2">Save</button>

                                                <button class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
                                            </div>

                                           
                                        <!-- </div> -->
                                    </div>
                                    <div class="tab-pane" id="tab62">
                                     
                                    <div class="table-responsive">
                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Comment</th>
                                                    <th>Comment By</th>
                                                    <th>Comment Date</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>7</td>
                                                    <td>Mr. Alex</td>
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
