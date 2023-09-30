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
                        <h1 class="page-title">Asset Sub Categories</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Asset Sub Category</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <button data-bs-toggle="modal" data-bs-target="#add-asset-sub-cat-modal" type="button"
                        class="btn btn-icon  btn-danger my-3"><i class="fa fa-plus" aria-hidden="true"></i> Add Sub
                        Category</button>


                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Asset Sub Category</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="file-datatable"
                                            class="table table-bordered text-nowrap key-buttons border-bottom">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Asset Category</th>
                                                    <th class="border-bottom-0">Name</th>
                                                    <th class="border-bottom-0">Created Date</th>
                                                    <th class="border-bottom-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT assetsubcategory.code,assetcategory.name,assetsubcategory.subcatname,assetsubcategory.createdate FROM assetsubcategory INNER JOIN assetcategory ON assetsubcategory.assetcategoryid = assetcategory.id where assetsubcategory.is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['code'] . "</td>";
                                                        echo "<td>" . $row['name'] . "</td>";
                                                        echo "<td>" . $row['subcatname'] . "</td>";
                                                        echo "<td>" . $row['createdate'] . "</td>";
                                                        echo "<td>";
                                                        echo '<button data-bs-toggle="modal" data-bs-target="#edit-asset-sub-cat-modal" type="button" id="subcatedit" class="btn btn-icon  btn-primary" data-id="' . $row['code'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                        echo '<button type="button" class="btn btn-icon btn-danger" id="deletesubcat" data-id="' . $row['code'] . '"><i class="fe fe-trash"></i></button>';
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

<!-- Add Asset Sub Category -->
<div class="modal fade" id="add-asset-sub-cat-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Sub Asset Category</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Country"
                            id="cmbCat">
                            <option value="0">Select Category</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="subcatname" name="subcatname">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="subcatdescription" name="subcatdescription"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="addsubcat">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Asset Sub Category -->
<div class="modal fade" id="edit-asset-sub-cat-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Sub Asset Category</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Country"
                            id="editcmbCat">
                            <option value="0">Select Category</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="editsubcatname" name="editsubcatname">
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="editsubcatbtn">Update</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>





<?php require_once '../includes/footer.php'; ?>