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
                                                        <h2 class="mb-0 number-font">10</h2>
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
                                                        <h2 class="mb-0 number-font">5</h2>
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
                                                        <h2 class="mb-0 number-font">5</h2>
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
                                                        <h2 class="mb-0 number-font">12</h2>
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
                                                        <h2 class="mb-0 number-font">7</h2>
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
                                                        <h2 class="mb-0 number-font">9</h2>
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
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 5%;">Id</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Image</th>
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

                                                    <th
                                                    class="bg-transparent border-bottom-0">
                                                    Date Of Manufacture</th>

                                                   
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765490</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Headsets</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cherry Blossom</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #76348798</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Flower Pot</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Simon Sais</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #23986456</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Pen Drive</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Manny Jah</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cash on Delivery</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                  
                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #87456325</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    New Bowl</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Florinda Carasco</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #65783926</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Leather Watch</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Ivan Notheridiya</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cash on Delivery</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                               
                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #34654895</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Digital Camera</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Willie Findit</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cash on Delivery</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                  
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765345</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Earphones</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Addie Minstra</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 
                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #67546577</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar bradius"
                                                                style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                            <div
                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Shoes</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Laura Biding</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cash on Delivery</h6>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Online Payment</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                              
                                                  
                                                </tr>


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
                                        <table id="data-table"
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
                                            <tbody>
                                                <tr class="border-bottom">

                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765490</h6>
                                                        </div>
                                                    </td>

                                          

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cherry Blossom</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                    </td>

                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #76348798</h6>
                                                        </div>
                                                    </td>
                                           
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Simon Sais</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                            2021</span></td>

                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                    </td>

                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #23986456</h6>
                                                        </div>
                                                    </td>
                                             
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Manny Jah</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                    </td>
                                           
                                                      
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #87456325</h6>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Florinda Carasco</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                    </td>
                                                
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #65783926</h6>
                                                        </div>
                                                    </td>
                                             
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Ivan Notheridiya</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>
                                         
                                               
                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #34654895</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Willie Findit</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>



                                        
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765345</h6>
                                                        </div>
                                                    </td>
                                              
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Addie Minstra</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                    </td>

                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #67546577</h6>
                                                        </div>
                                                    </td>
                                                
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Laura Biding</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                    </td>
                                               
                                                  
                                                </tr>


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
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765490</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cherry Blossom</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span>
                                                    </td>
                                                 
                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #76348798</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Simon Sais</h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                            2021</span>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span>
                                                    </td>
                                                   

                                                  


                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #23986456</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Manny Jah</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                            2021</span>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span>
                                                    </td>
                                                    
                                                 

                                                  
                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #87456325</h6>
                                                        </div>
                                                    </td>

                                                 
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Florinda Carasco</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                    </td>
                                               

                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #65783926</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    
                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>

                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                            2021</span>
                                                    </td>
                                                   

                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #34654895</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Willie Findit</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                    </td>

                                                  
                                                </tr>


                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #98765345</h6>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Addie Minstra</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                    </td>
                                                 

                                                  

                                                  
                                                </tr>



                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6
                                                                class="mb-0 fs-14 fw-semibold">
                                                                #67546577</h6>
                                                        </div>
                                                    </td>
                                                  
                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                            2021</span></td>
                                                    <td><span
                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div
                                                                class="mt-0 mt-sm-3 d-block">
                                                                <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    Cash on Delivery</h6>
                                                            </div>
                                                        </div>
                                                    </td>


                                                 
                                                   
                                              
                                                  
                                                </tr>


                                            </tbody>
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
