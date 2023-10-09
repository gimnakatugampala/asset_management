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
                        <h1 class="page-title">Asset Categories</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Asset Category</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <button data-bs-toggle="modal" data-bs-target="#add-asset-cat-modal" type="button"
                        class="btn btn-icon  btn-danger my-3"><i class="fa fa-plus" aria-hidden="true"></i> Add
                        Category</button>

                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Asset Category</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="file-datatable"
                                            class="table table-bordered text-nowrap key-buttons border-bottom">
                                            <thead>
                                                <tr>

                                                    <th class="border-bottom-0">ID</th>
                                                    <th class="border-bottom-0">Name</th>
                                                    <th class="border-bottom-0">Created Date</th>
                                                    <th class="border-bottom-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT * FROM assetcategory WHERE is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    foreach ($result as $row) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['code'] . "</td>";
                                                        echo "<td>" . $row['asscatname'] . "</td>";
                                                        echo "<td>" . $row['createdate'] . "</td>";
                                                        echo "<td>";
                                                        echo '<button data-bs-toggle="modal" data-bs-target="#edit-asset-cat-modal" type="button" class="btn btn-icon  btn-primary editcat" data-id="' . $row['code'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                        echo '<button type="button" class="btn btn-icon btn-danger deletecat" data-id="' . $row['code'] . '"><i class="fe fe-trash"></i></button>';
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

<!-- Add Asset Category -->
<div class="modal fade" id="add-asset-cat-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Asset Category</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="catname" name="catname">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="catdescription" name="catdescription"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="addcat">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Asset Category -->
<div class="modal fade" id="edit-asset-cat-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Asset Category</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="editcatname" name="editcatname">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="editcatdescription" name="editcatdescription"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="editcatbtn">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>