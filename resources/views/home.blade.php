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
  <body>
    <!-- Header -->
    <header class="navbar sticky-top navbar-expand-lg main-nav">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">GoLearnlish</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto py-3">
            <a class="nav-link px-3 active" aria-current="page" href="{{ route('home') }}">Home</a>
            <a class="nav-link px-3" href="#belajar">Belajar</a>
            <a class="nav-link px-3" href="/quiz">Quiz</a>
            <a class="nav-link px-3" href="/feedback">feedback</a>
            <a class="nav-link px-3" href="{{ route('profile') }}">Profile</a>
            <a class="nav-link px-3" href="{{ route('actionlogout') }}">Log Out</a>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Home -->
    <section id="home" class="main-home">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 text-end align-self-center">
            <div class="">
              <h1>Latih Skill <span>Bahasa Inggrismu</span> Bersama <span>GoLearnlish</span> Sekarang</h1>
              <button type="button" class="btn">Mulai Belajar</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="px-4 py-5">
              <img src="assets/img/home-img.png" class="px-4 py-4 w-100" alt="" />
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F2E8CF" fill-opacity="1" d="M0,192L120,176C240,160,480,128,720,138.7C960,149,1200,203,1320,229.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
      </svg>
    </section>
    <!-- End Home -->

    <!-- Belajar -->
    <section id="belajar" class="main-belajar">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="card border-card-belajar">
              <div class="card-body">
                <h5 class="card-title">Materi</h5>
                
                <a href="/materi " class="btn btn-belajar">Buka</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card border-card-belajar">
              <div class="card-body">
                <h5 class="card-title">Video</h5>
                
                <a href="/vidio" class="btn btn-belajar">Buka</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a7c957"
          fill-opacity="1"
          d="M0,160L48,154.7C96,149,192,139,288,117.3C384,96,480,64,576,74.7C672,85,768,139,864,176C960,213,1056,235,1152,234.7C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End of Belajar -->

    <!-- QUIZ -->
    <section id="quiz" class="main-quiz">
      <div class="container">
        <div class="row">
          <div class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 1</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 2</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 3</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 4</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 5</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 6</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 7</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 8</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 9</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 splide__slide m-2">
                  <div class="card border-card-quiz">
                    <div class="card-body">
                      <h5 class="card-title">QUIZ 10</h5>
                      
                      <a href="#" class="btn btn-quiz">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f2e8cf" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,128C960,117,1200,139,1320,149.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
      </svg>
    </section>
    <!-- End of Quiz -->

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
