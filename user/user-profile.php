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
                                            <?php
                                                require_once '../includes/db_config.php';

                                                $user_id = $_SESSION['user_id'];

                                                $sql = "SELECT tbgenaral_user_profile.usercode,tbgenaral_user_profile.modifieddate,tbgenaral_user_profile.modifieby, tbgenaral_user_profile.firstname, tbgenaral_user_profile.lastname, tbgenaral_user_profile.phoneno, user_login.email, tbgenaral_user_profile.createddate, tbcountry.name FROM user_login INNER JOIN tbgenaral_user_profile ON user_login.genaral_user_profile_id = tbgenaral_user_profile.id
                                                INNER JOIN tbcountry ON tbgenaral_user_profile.country_id = tbcountry.id WHERE user_login.is_deleted = 0 and user_login.id = '$user_id'";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<th>user code</th>";
                                                        echo "<td>" . $row['usercode'] . "</td>";
                                                        echo "</tr>";
                                                        
                                                        echo "<tr>";
                                                        echo "<th>First Name</th>";
                                                        echo "<td>" . $row['firstname'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>Last Name</th>";
                                                        echo "<td>" . $row['lastname'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>Phone No</th>";
                                                        echo "<td>" . $row['phoneno'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>Email</th>";
                                                        echo "<td>" . $row['email'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>Created Date</th>";
                                                        echo "<td>" . $row['createddate'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>Country</th>";
                                                        echo "<td>" . $row['name'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>modifie ddate</th>";
                                                        echo "<td>" . $row['modifieddate'] . "</td>";
                                                        echo "</tr>";

                                                        echo "<tr>";
                                                        echo "<th>modifie by</th>";
                                                        echo "<td>" . $row['modifieby'] . "</td>";
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

                                    <button data-bs-toggle="modal" data-bs-target="#edit-user-profile-modal"
                                        type="button" class="btn btn-icon  btn-primary" id="edituserprofile">Edit User Profile</button>
                                    <button data-bs-toggle="modal" data-bs-target="#reset-password-modal" type="button"
                                        class="btn btn-icon  btn-primary" id="updateuserpwsup">Reset Password</button>


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







<!-- Edit User Profile -->
<div class="modal fade" id="edit-user-profile-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User Profile</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phoneno" id="phoneno" maxlength="10">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Country</label>
                            <select name="country" class="form-control form-select" id="countrySelect">
                                <option value="0">Select Country</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image URL</label>
                            <input type="file" class="dropify" data-bs-height="180" name="image" accept="image/*"
                                id="image">

                        </div>

                    </div>

                    <input type="hidden" class="form-control" name="code" id="code">

                    <div class="d-flex justify-content-center">
                        <button class="btn ripple btn-success mx-1" type="button" id="btnSave">Save</button>
                        <button class="btn ripple btn-danger mx-1" data-bs-dismiss="modal" type="button">Close</button>
                    </div>


                </div>


            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="reset-password-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Reset Password</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="pws" name="pws">
                </div>

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="conpws" name="conpws">
                </div>

                <button type="button" class="btn btn-icon  btn-primary"  id="pwsUpdate">Update</button>

            </div>

        </div>
    </div>
</div>





<?php require_once '../includes/footer.php'; ?>