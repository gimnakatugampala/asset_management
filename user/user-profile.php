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
                                                <th>Username</th>
                                                <td>g@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>Host(SMTP)</th>
                                                <td>smtp.gmail.com</td>
                                            </tr>

                                            <tr>
                                                <th>Port(SMTP)</th>
                                                <td>587</td>
                                            </tr>

                                            <tr>
                                                <th>From Email</th>
                                                <td>gimna@gmail.com</td>
                                            </tr>

                                            
                                            <tr>
                                                <th>From Full Name</th>
                                                <td>Web Admin Notification</td>
                                            </tr>

                                            <tr>
                                                <th></th>
                                                <td>
                                                <button data-bs-toggle="modal" data-bs-target="#emtp-edit-modal" type="button" class="btn btn-icon  btn-primary">Edit</button>
                                                <button data-bs-toggle="modal" data-bs-target="#emtp-details-modal" type="button" class="btn btn-icon  btn-primary">Details</button>
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
