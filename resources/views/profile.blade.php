<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Reqiuared meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Web GoLearnlish</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- SPLIDE CSS -->
    <link rel="stylesheet" href="assets/css/splide.min.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body >
    <!-- Header -->
    <header class="navbar sticky-top navbar-expand-lg main-nav">
        <div class="container">
          <a class="navbar-brand" href="index.html">GoLearnlish</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto py-3">
                <a class="nav-link px-3 active" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link px-3" href="#belajar">Belajar</a>
                <a class="nav-link px-3" href="/quiz">Quiz</a>
                <a class="nav-link px-3" href="/feedback">feedback</a>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header -->

      <!-- Content Section -->
    <section style="background-color: #f2e8cf">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                <h3 style="text-align: center; margin-bottom: 2%">Profile</h3>
                </div>
            </div>
            @foreach($profile as $p)
            <div class="row">
                <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                    <img src="https://simg-ssl.duolingo.com/avatars/1037796642/lkrS7pjjNT/xxlarge" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{$p->fullname}}</h5>
                    <p class="text-muted mb-1">{{$p->username}}</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="{{ route('editprofile',$p->id) }}"><button type="button" class="btn btn-primary"> Edit Profile</button></a>
                    </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <p class="mb-0"></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <p class="mb-0"></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <p class="mb-0"></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0"></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0"></p>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$p->fullname}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Username</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$p->username}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$p->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0">No HP</p>
                        </div>
                        <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$p->nohp}}</p>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                            <p class="mb-4">
                                <span class="text-primary font-italic me-1">Statistik Pembelajaran</span>
                            </p>
                            <p class="mb-1" style="font-size: .77rem;">Quiz</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Listening</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Reading</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Grammar</p>
                            <div class="progress rounded" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Content Section -->













    <!-- BOOTSTRAP JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JQUERY JS -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- SPLIDE JS -->
    <script src="assets/js/splide.min.js"></script>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>