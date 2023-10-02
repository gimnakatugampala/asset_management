<?php require_once '../includes/header.php'; ?>

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
                            <h1 class="page-title">Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Assets</h6>
                                                        <h2 class="mb-0 number-font" id="total-count1"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totalassetchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Assigned Asset</h6>
                                                        <h2 class="mb-0 number-font"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totalassignedassetchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Unassigned Asset</h6>
                                                        <h2 class="mb-0 number-font"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totalunassignedassetchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Employees</h6>
                                                        <h2 class="mb-0 number-font" id="total-count2"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totalemployee"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Department</h6>
                                                        <h2 class="mb-0 number-font" id="total-count3"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totaldepartment"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Suppliers</h6>
                                                        <h2 class="mb-0 number-font" id="total-count4"></h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="totalsuppliers"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->


                        <!-- ROW-4 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Recent Asset</h3>
                                    </div>
                                    <div class="card-body pt-4">

                                    <div class="table-responsive">
                                        <table id="data-table"
                                            class="table table-bordered text-nowrap mb-0">
                                            <thead class="border-top">
                                                <tr>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Asset ID</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Asset Model No</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Name</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Assigned Employee</th>

                                                    <th
                                                    class="bg-transparent border-bottom-0">
                                                    Unit Price</th>

                                                    <th
                                                    class="bg-transparent border-bottom-0">
                                                    Date Of Purchase</th>

                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                             require_once '../includes/db_config.php';

                                             $sql = 'SELECT * FROM tbemployee INNER JOIN tbasset ON tbasset.assigntoemployeeid = tbemployee.id WHERE tbasset.is_deleted = 0';
                                             $result = $conn->query($sql);


                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // Populate table rows with data from the database
                                                    echo "<tr class='border-bottom'>";
                                                    echo "<td><span class='mt-sm-2 d-block'>" . $row['code'] . "</span></td>";
                                                    echo "<td><span class='fw-semibold mt-sm-2 d-block'>" . $row['modal'] . "</span></td>";
                                                    echo "<td><span class='fw-semibold mt-sm-2 d-block'>" . $row['name'] . "</span></td>";
                                                    if($row['employeecode'] == 000){
                                                        echo "<td><div class='d-flex'><div class='mt-0 mt-sm-3 d-block'><h6 class='mb-0 fs-14 fw-semibold'>Unassigned</h6></div></div></td>";
                                                    }else{
                                                        echo "<td><div class='d-flex'><div class='mt-0 mt-sm-3 d-block'><h6 class='mb-0 fs-14 fw-semibold'>" . $row['firstname'] . "" . $row['lastname'] . "</h6></div></div></td>";
                                                    }
                                                    echo "<td><div class='d-flex'><div class='mt-0 mt-sm-3 d-block'><h6 class='mb-0 fs-14 fw-semibold'>" . $row['unitprice'] . "</h6></div></div></td>";
                                                    echo "<td><div class='d-flex'><div class='mt-0 mt-sm-3 d-block'><h6 class='mb-0 fs-14 fw-semibold'>" . $row['purchaseDate'] . "</h6></div></div></td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='8'>No data available</td></tr>";
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
                        <!-- ROW-4 END -->

                        <!-- ROW-2 -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Employees</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="data-table employee-table"
                                            class="table table-bordered text-nowrap mb-0">
                                            <thead class="border-top">
                                                <tr>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 5%;">Id</th>
                                                 
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Employee Name</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Email</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Phone</th>
                                               

                                                   
                                                 
                                                </tr>
                                            </thead>
                                            <tbody id="bodyemp">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Supliers</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="data-table"
                                            class="table table-bordered text-nowrap mb-0">
                                            <thead class="border-top">
                                                <tr>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 5%;">Id</th>
                                                   
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Supplier Name</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Email</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Phone</th>
                                            

                                                   
                                                 
                                                </tr>
                                            </thead>
                                            <tbody id="bodysup"> </tbody>
                                        </table>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 END -->

                   

                 


                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

    </div>



   
    <?php require_once '../includes/footer.php'; ?>
