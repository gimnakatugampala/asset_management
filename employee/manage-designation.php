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
                            <h1 class="page-title">Manage Designation</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Designation</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-designation-modal"><i class="icon-plus mx-1"></i>  Add Designation</button>
            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Designation List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Name</th>
                                                        <th class="border-bottom-0">Description</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT * FROM tbdesignation WHERE is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['code'] . "</td>";
                                                        echo "<td>" . $row['desname'] . "</td>";
                                                        echo "<td>" . $row['description'] . "</td>";
                                                        echo "<td>" . $row['createddate'] . "</td>";
                                                        echo "<td>";
                                                        echo '<button data-bs-toggle="modal" data-bs-target="#edit-designation-modal" type="button" class="btn btn-icon  btn-primary editdesignation" data-id="' . $row['code'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                        echo '<button type="button" class="btn btn-icon btn-danger deletedesignation" data-id="' . $row['code'] . '"><i class="fe fe-trash"></i></button>';
                                                        echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='6'>No users found.</td></tr>";
                                                }

                                                $conn->close();
                                                ?>
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


   <!-- Add Designation  -->
   <div class="modal fade" id="add-designation-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Designation</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="desname" name="desname">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="desdiscription" name="desdiscription"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button" id="adddesignation">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Designation  -->
    <div class="modal fade" id="edit-designation-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Designation</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="editdesname" name="editdesname">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="editdesdiscription" name="editdesdiscription"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button" id="editDesbtn">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>



   
    <?php require_once '../includes/footer.php' ;?>
