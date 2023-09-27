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
                            <h1 class="page-title">Comment</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Comment</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Comment List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Asset ID</th>
                                                        <th class="border-bottom-0">Asset Name</th>
                                                        <th class="border-bottom-0">Message</th>
                                                        <th class="border-bottom-0">Is Deleted</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">Created By</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Charger</td>
                                                        <td>Desc</td>
                                                        <td>12/12/2021</td>
                                                        <td>12/12/2021</td>
                                                        <td>12/12/2021</td>
                                                        <td>
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



   
    <?php require_once '../includes/footer.php' ;?>
