<?php require_once '../includes/header.php'; ?>

<style>
    .dt-buttons.btn-group {
        position: relative;
    }
</style>

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <?php require_once '../includes/top-header.php'; ?>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <?php require_once '../includes/sidebar.php'; ?>
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

                    <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal"
                        data-bs-target="#add-supplier-modal"><i class="icon-plus mx-1"></i> Add Supplier</button>


                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Supplier List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="file-datatable"
                                            class="table table-bordered text-nowrap key-buttons border-bottom">
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
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT * FROM tbsupplier WHERE is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['code'] . "</td>";
                                                        echo "<td>" . $row['supname'] . "</td>";
                                                        echo "<td>" . $row['contactperson'] . "</td>";
                                                        echo "<td>" . $row['email'] . "</td>";
                                                        echo "<td>" . $row['phone'] . "</td>";
                                                        echo "<td>" . $row['address'] . "</td>";
                                                        echo "<td>" . $row['createddate'] . "</td>";
                                                        echo "<td>";
                                                        echo '<button data-bs-toggle="modal" data-bs-target="#edit-supplier-modal" type="button" id="editsup" class="btn btn-icon  btn-primary" data-id="' . $row['code'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                        echo '<button type="button" class="btn btn-icon btn-danger" id="deletesup" data-id="' . $row['code'] . '"><i class="fe fe-trash"></i></button>';
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
                                <input type="text" class="form-control" name="supname" id="supname">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Contact Person</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="cperson" id="cperson">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Address</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="supaddress" id="supaddress">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Email</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="supemail" id="supemail">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Phone</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="supphone" id="supphone">
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="supSave">Save</button>
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
                                <input type="text" class="form-control" name="editsupname" id="editsupname">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Contact Person</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="editcperson" id="editcperson">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Address</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="editsupaddress" id="editsupaddress">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Email</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="editsupemail" id="editsupemail">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="col-md-3 form-label">Phone</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="editsupphone" id="editsupphone">
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="editbtnsup">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>




<?php require_once '../includes/footer.php'; ?>