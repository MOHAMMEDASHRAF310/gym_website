<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <title>GYMSTER - Gym HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="home/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="home/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 40%;
            text-align: center; 
            margin-top: -400px;
            margin-left: 1000px;
            margin-right: auto;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    @include('home.inc.header')
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success ">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                        {{session()->get('message')}}
                    </div>
                    
                @endif
            </div>
            <form method="POST" action="{{route('add_book')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" name="name" class="form-control" required id="inputEmail4" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Age</label>
                        <input type="number" name="age" class="form-control" required id="inputPassword4" placeholder="Age">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">phone</label>
                        <input type="text" name="phone" class="form-control" required id="inputPassword4" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Weight</label>
                        <input type="number" class="form-control" name="weight" required placeholder="Enter Your Weight">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Height</label>
                        <input type="number" class="form-control" name="height" required placeholder="Enter Your Height">
                        <label for="inputState">Class</label>
                        
                            
                        
                        <select name="class" required class="form-control">
                            <option selected>Choose...</option>
                            @foreach ($class as $item)
                            <option value="{{$item->id}}">{{$item->room_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary">Book Now</button>
            </form>
            <div>
                <table class="table" id="customers">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Your Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Class</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cancel</th>
                        </tr>
                    </thead>
                    @php
                        $x=1
                    @endphp
                    @foreach ($data as $item)
                        
                
                    <tbody>
                        <tr>
                            <th scope="row">{{$x++}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->class_id}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-success">{{$item->status}}</button>
                            </td>
                            <td>
                                <a href="{{url('delete',$item->id)}}" class="btn btn-outline-danger">Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
    @include('home.inc.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/waypoints/waypoints.min.js"></script>
    <script src="home/lib/counterup/counterup.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>



</body>

</html>
