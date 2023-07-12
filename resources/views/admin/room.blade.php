<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.parts.sidbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->

                <!-- Navigation -->
                @include('admin.inc.header')
                <!-- Navigation -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Class</h1>
                    </div>
                    <div>
                        @if (session()->has('message'))
                        <div  class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                            {{session()->get('message')}}
                        </div>
                        
                            
                        @endif

                    </div>
                    <div class="row">

                        <form method="POST" action="{{route('add_class')}}" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Class Name</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Class Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Number of Trainee</label>
                                    <input type="number" name="num" class="form-control"  placeholder="Number of Trainee">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Price</label>
                                    <input type="number" name="price" class="form-control"  placeholder="Price">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Program</label>
                                    <input type="text" name="program" class="form-control"  placeholder="Program">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="inputState">Trainer</label>
                                    <select name="trainer" class="form-control">
                                        <option selected>Choose...</option>
                                        @foreach ($trainer as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">Add Class</button>
                            </div>
                        </form>
                        <br>
                    </div>  
                    <br>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.inc.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>