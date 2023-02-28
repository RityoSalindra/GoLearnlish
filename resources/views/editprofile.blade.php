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
              <a class="nav-link px-3" href="{{ route('profile') }}">Profile</a>
              <a class="nav-link px-3" href="{{ route('actionlogout') }}">Log Out</a>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header -->

      <section style="background-color: #f2e8cf">
        <h3>Edit Profile/h3>
        @foreach($profile as $p)
          <form method="post" action="{{route('updateprofile')}}">
            @csrf
            <input type="hidden" name="id" value="{{$p->id}}">
            <div class="form-group">
              <label>Fullname</label>
              <input type="text" name="fullname" value="{{$p->fullname}}" class="form-control" placeholder="Fullname" required="">
            </div>
            {{-- <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" value="{{$p->username}}" class="form-control" placeholder="Username" required="">
            </div> --}}
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="{{$p->email}}" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label>No. Hp</label>
              <input type="text" name="nohp" value="{{$p->nohp}}" class="form-control" placeholder="No. Hp" required="">
            </div>
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Profile</button>
            </div>
          </form>
        @endforeach
</section>


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