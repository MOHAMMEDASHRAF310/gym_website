<div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase">The Team</h5>
        <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
    </div>
    
    <div class="row g-5">
        @foreach ($trainer as $item)
        <div class="col-lg-4 col-md-6">
            <div class="team-item position-relative">
                <div class="position-relative overflow-hidden rounded">
                    <img class="img-fluid w-100" src="trainer_image/{{$item->photo}}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                    <h5 class="text-uppercase text-light">{{$item->name}}</h5>
                    <p class="text-uppercase text-secondary m-0">{{$item->specialize}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>