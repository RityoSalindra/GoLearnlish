<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
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
<body onload="NextQuestion(0)">
    <header class="navbar sticky-top navbar-expand-lg main-nav">
      <div class="container">
        <a class="navbar-brand" href="index.php">GoLearnlish</a>
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
        <!-- creating a modal for when quiz ends -->
        <div class="modal-container" id="score-modal">

            <div class="modal-content-container">

                <h1>Congratulations, Quiz Completed.</h1>

                <div class="grade-details">
                    <p>Attempts : 10</p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p ><span id="remarks"></span></p>
                </div>

                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Continue</button>
                </div>

            </div>
        </div>
<!-- end of modal of quiz details-->

        <div class="game-quiz-container">

            <div class="game-details-container">
                <h1>Score : <span id="player-score"></span> / 10</h1>
                <h1> Question : <span id="question-number"></span> / 10</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">

               <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                         <h1>Please Pick An Option</h1>

                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>

                    </div>

               </div>

                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next Question</button>
            </div>

        </div>
    </main>
    <script src="assets/js/index.js"></script>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- JQUERY JS -->
<script src="assets/js/jquery-3.6.1.min.js"></script>
<!-- SPLIDE JS -->
<script src="assets/js/splide.min.js"></script>
<!-- MAIN JS -->
<script src="assets/js/main.js"></script>
</html>