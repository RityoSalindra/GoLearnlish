<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Reqiuared meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="assets/css/feedback.css">

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
        </div>
      </div>
    </div>
  </header>
  <main>
    <section style="background-color: white; padding: 100px;">
      <div class="wrap">
        <table style="margin-left: 0px">
          <form action="{{ route('addfeedback') }}" method="post" >
            @csrf
            <h1 style="text-align: center;">Feedback Page</h1>
            <tr>
              <td>
                <label>
                  How do you Rate</label>
                <br />
                <input type="radio" name="rate" value="bad">Bad
                <input type="radio" name="rate" value="Average">Average
                <input type="radio" name="rate" value="Good">Good
              </td>
            </tr>
            <tr>
              <td><label>Fullname*</label>
                <br />
                <input type="text" name="fullname">
              </td>
              <td>
                <label>Nickname*</label>
                <br />
                <input type="text" name="nickname">
              </td>
            </tr>
            <tr>
              <td><label>Email*</label>
                <br />
                <input type="Email" name="email">
              </td>
              <td>
                <label>Phone*</label>
                <br />
                <input type="text" name="phone">
              </td>
            </tr>
            <tr>
              <td>
                <label>Message</label>
                <br />
                <textarea name="massage"></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit">Submit</button>
              </td>
            </tr>
          </form>
        </table>
      </div>
    </section>
  </main>
</body>