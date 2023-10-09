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
                            <h1 class="page-title">Asset Status Report</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Asset Status Report</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card p-3">

                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="mb-4">
                                                <label class="col-md-5 form-label">Start Date</label>
                                                <div class="col-md-12">
                                                    <input type="date" class="form-control" id="start-date" name="start-date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="mb-4">
                                                <label class="col-md-5 form-label">End Date</label>
                                                <div class="col-md-12">
                                                    <input type="date" class="form-control" id="end-date" name="end-date">
                                                </div>
                                            </div>
                                        </div>

                                 
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary mx-2" id="suubmit">Submit</button>
                                            <button type="button" class="btn btn-danger mx-2">Reset</button>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
        
                    </div>

            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                    <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">New</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <!-- <th class="border-bottom-0">Available</th>
                                                        <th class="border-bottom-0">Damage</th>
                                                        <th class="border-bottom-0">Return</th>
                                                        <th class="border-bottom-0">Expired</th>
                                                        <th class="border-bottom-0">Required License Update</th>
                                                        <th class="border-bottom-0">Miscellaneous</th>
                                                    </tr> -->
                                                </thead>
                                                <tbody id="table-body-range">
                                                    
                                                   
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

    <?php require_once '../includes/footer.php' ;?>
