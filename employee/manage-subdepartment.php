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
                            <h1 class="page-title">Manage Sub Department</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Sub Department</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal" data-bs-target="#add-subdepartment-modal"><i class="icon-plus mx-1"></i>  Add Sub Department</button>
            
                        
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sub Department List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Department Name</th>
                                                        <th class="border-bottom-0">Name</th>
                                                        <th class="border-bottom-0">Created Date</th>
                                                        <th class="border-bottom-0">Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT tbsubdepartment.code,tbdepartment.depname,tbsubdepartment.subdepname,tbsubdepartment.createdate FROM tbsubdepartment INNER JOIN tbdepartment ON tbsubdepartment.departmentid = tbdepartment.id where tbsubdepartment.is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['code'] . "</td>";
                                                        echo "<td>" . $row['depname'] . "</td>";
                                                        echo "<td>" . $row['subdepname'] . "</td>";
                                                        echo "<td>" . $row['createdate'] . "</td>";
                                                        echo "<td>";
                                                        echo '<button data-bs-toggle="modal" data-bs-target="#edit-subdepartment-modal" type="button" id="subdepedit" class="btn btn-icon  btn-primary" data-id="' . $row['code'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                        echo '<button type="button" class="btn btn-icon btn-danger" id="deletesubdepartment" data-id="' . $row['code'] . '"><i class="fe fe-trash"></i></button>';
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

   <!-- Add Department  -->
   <div class="modal fade" id="add-subdepartment-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Sub Department</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label class="form-label">Select Department</label>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Country" id="cmbDepartment">
                                <option value="0">Select Department</option>
                                
                            </select>
                    </div>
                    
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="subdepname" name="subdepname">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="subdepdescription" name="subdepdescription"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button" id="addsubDepartment">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Department  -->
    <div class="modal fade" id="edit-subdepartment-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Sub Department</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label class="form-label">Select Department</label>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Country" id="editcmbDepartment">
                                <option value="0">Select Department</option>
                                
                            </select>
                    </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="editsubdepname" name="editsubdepname">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="editsubdepdescription" name="editsubdepdescription"></textarea>
                      </div>
                    </form>
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button" id="editsubDepartmentbtn">Save</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>



   
    <?php require_once '../includes/footer.php' ;?>
