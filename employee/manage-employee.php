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
                        <h1 class="page-title">Manage Employee</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Employee</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <button class="btn btn-danger bg-danger my-3" data-bs-toggle="modal"
                        data-bs-target="#add-employee-modal"><i class="icon-plus mx-1"></i> Add Employee</button>


                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Employee List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="file-datatable"
                                            class="table table-bordered text-nowrap key-buttons border-bottom">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0">Employee ID</th>
                                                    <th class="border-bottom-0">First Name</th>
                                                    <th class="border-bottom-0">Last Name</th>
                                                    <th class="border-bottom-0">Date of Birth</th>
                                                    <th class="border-bottom-0">Designation</th>
                                                    <th class="border-bottom-0">Department</th>
                                                    <th class="border-bottom-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once '../includes/db_config.php';

                                                $sql = 'SELECT tbemployee.employeecode, tbdesignation.desname,tbemployee.firstname,tbemployee.lastname,tbemployee.dob,tbdepartment.depname
                                                FROM tbemployee
                                                INNER JOIN tbdesignation ON tbemployee.designationid = tbdesignation.id INNER JOIN tbdepartment ON tbemployee.departmentid = tbdepartment.id where tbemployee.is_deleted = 0';
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    foreach ($result as $row) {
                                                        if($row['employeecode'] > 0){
                                                            echo "<tr>";
                                                            echo "<td>" . $row['employeecode'] . "</td>";
                                                            echo "<td>" . $row['firstname'] . "</td>";
                                                            echo "<td>" . $row['lastname'] . "</td>";
                                                            echo "<td>" . $row['dob'] . "</td>";
                                                            echo "<td>" . $row['desname'] . "</td>";
                                                            echo "<td>" . $row['depname'] . "</td>";
                                                            echo "<td>";
                                                            echo '<button data-bs-toggle="modal" data-bs-target="#edit-employee-modal" type="button" class="btn btn-icon  btn-primary editemp" data-id="' . $row['employeecode'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                                                            echo '<button type="button" class="btn btn-icon btn-danger deleteemp" data-id="' . $row['employeecode'] . '"><i class="fe fe-trash"></i></button>';
                                                            // echo '<button data-bs-toggle="modal" data-bs-target="#detail-employee-modal" type="button" class="btn btn-icon  btn-warning"><i class="fa fa-eye" aria-hidden="true" data-id="' . $row['employeecode'] . '"></i></button>';
                                                            echo "</td>";
                                                            echo "</tr>";
                                                        }
                                                        
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


<!-- Add Employee Status -->
<div class="modal fade" id="add-employee-modal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add Employee</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">


                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Department</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department" id="cmbDepartment">
                                <option value="0">Select Department</option>

                            </select>
                        </div>

                        <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department" id="cmbDepartment" >
                                <option value="0">Select Department</option>

                            </select>

                        <div class="mb-3">
                            <label class="form-label">Select Designation</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department" id="cmbDes">
                                <option value="0">Select Designation</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Joining Date</label>
                            <input type="date" class="form-control" id="joingdate" name="joingdate">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>



                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Date Of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob">
                        </div>



                        <div class="mb-3">
                            <label class="form-label">Select Sub Department</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department" id="cmbSubdep">
                                <option value="0">Select Sub Department</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Leaving Date</label>
                            <input type="date" class="form-control" id="leavingdate" name="leavingdate">
                        </div>


                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="addempbtn">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Employee Status -->
<div class="modal fade" id="edit-employee-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Edit Employee</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-6">


                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="editfirstname" name="editfirstname">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Department</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department">
                                <option value="br">Brazil</option>
                                <option value="cz">Czech Republic</option>
                                <option value="de">Germany</option>
                                <option value="pl">Poland</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Select Designation</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department">
                                <option value="br">Brazil</option>
                                <option value="cz">Czech Republic</option>
                                <option value="de">Germany</option>
                                <option value="pl">Poland</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="editphone" name="editphone">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Joining Date</label>
                            <input type="date" class="form-control" id="editjoingdate" name="editjoingdate">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="editaddress" name="editaddress">
                        </div>



                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="editlastname" name="editlastname">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Date Of Birth</label>
                            <input type="date" class="form-control" id="editdob" name="editdob">
                        </div>



                        <div class="mb-3">
                            <label class="form-label">Select Sub Department</label>
                            <select name="country" class="form-control form-select"
                                data-bs-placeholder="Select Department">
                                <option value="br">Brazil</option>
                                <option value="cz">Czech Republic</option>
                                <option value="de">Germany</option>
                                <option value="pl">Poland</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="editemail" name="editemail">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Leaving Date</label>
                            <input type="date" class="form-control" id="editleavingdate" name="editleavingdate">
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button" id="editempbtn">Save</button>
                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Employee Details Modal -->
<div class="modal fade" id="detail-employee-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Employee Details</h6>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="card-body">

                        <div class="panel panel-primary">
                            <div class="tab-menu-heading tab-menu-heading-boxed">
                                <div class="tabs-menu tabs-menu-border">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab1" class="active" data-bs-toggle="tab">Employee Details</a>
                                        </li>
                                        <li><a href="#tab2" data-bs-toggle="tab">Assigned Assets</a></li>
                                        <li><a href="#tab3" data-bs-toggle="tab">Asset History</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">

                                        <div class="table-responsive">
                                            <table class="table border text-nowrap table-striped text-md-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>4</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Employee ID</th>
                                                        <th>634758</th>
                                                    </tr>

                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Mr.</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Last Name</th>
                                                        <th>Alex</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Date Of Birth</th>
                                                        <th>12/12/1993</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Designation</th>
                                                        <th>Software Engineer</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Department</th>
                                                        <th>IT</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Sub Department</th>
                                                        <th>QA</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Joining Date</th>
                                                        <th>12/12/2020</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Leaving Date</th>
                                                        <th>12/12/2021</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Phone</th>
                                                        <th>3543534534</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Email</th>
                                                        <th>example@gmail.com</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Address</th>
                                                        <th>Netherland</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Created Date</th>
                                                        <th>12/12/2021</th>
                                                    </tr>

                                                    <tr>
                                                        <th>Modified Date</th>
                                                        <th>12/12/2021</th>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="tab2">

                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap mb-0">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Asset ID</th>
                                                        <th>Name</th>
                                                        <th>Asset Model No</th>
                                                        <th>Date Of Purchase</th>
                                                        <th>Modified Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>ID-009</td>
                                                        <td>Samsung Note</td>
                                                        <td>SamsungNote123</td>
                                                        <td>29 December 2021</td>
                                                        <td>01 January 2021</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="tab3">

                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap mb-0">
                                                <thead class="table-primary">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Asset ID</th>
                                                        <th>Assign Employee</th>
                                                        <th>Action</th>
                                                        <th>Note</th>
                                                        <th>Created Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>7</td>
                                                        <td>Mr. Alex</td>
                                                        <td>Ussigned Emplyee Assigned to Employee </td>
                                                        <td></td>
                                                        <td>01 January 2021</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php require_once '../includes/footer.php'; ?>