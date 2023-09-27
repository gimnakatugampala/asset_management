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
                    <div class="card my-5 p-4">

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-icon  btn-primary mx-1"><i class="fa fa-print" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-icon  btn-primary mx-1">Back</button>
                    </div>

                    
                        <div class="mx-auto text-center">
                            <img width="45%" src="../assets/images/asset-image/asset_qr.png" />
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
