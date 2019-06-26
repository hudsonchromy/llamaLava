<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Llama Lava</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css"/>  
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>  
        <script src="jquery.gradientify.min.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="col-sm-9">
                <h1>Llama or Lava</h1>
                <div class="col-xs-12">
                    <div class="col-xs-6">
                        <h id="timer">Time</h>
                    </div>
                    <div class="col-xs-6">
                        <h id="score">Score</h>
                    </div>
                </div>
                <img src="images/start.JPG" id="maybeLlamamaybeLava" onclick="start()">
                <button onclick="clickedChoice('llama')">Llama (A)</button>
                <button onclick="clickedChoice('lava')">Lava (L)</button>
            </div>
            <div class="col-sm-3">
                <div id="scores">
                    <h2>High Scores</h2>
                    <?php include('highscores.php')?>
                </div id="enter">
                    <h2>Enter Score</h2>
                    <form name="ScoreForm" id="scoreSubmit">
                        <input onchange="changeInitals()" type="text" name="initials">
                    </form>
                        <button onclick="submitScore()" class="btn">Submit</button>

                </div>
            </div>
        </div>


    	<script>
            var id;
            var current = "";
            var score = 0;
            var time;
            var mode = "done"; // done, done-submit, during
            function changePicture() {
                if(mode.substring(0, 4) == 'done') {
                    start();
                }
                if (Math.random() < 0.5) { //lama
                    document.getElementById("maybeLlamamaybeLava").src = "images/llama" + Math.ceil(Math.random() *  14) + ".jpg";
                    current = "llama";
                } //lava
                else {
                    document.getElementById("maybeLlamamaybeLava").src = "images/lava" + Math.ceil(Math.random() *  14) + ".jpg";
                    current = "lava";
                }
            }

            function start() {
                if (mode.substring(0, 4) == "done") {
                    mode = 'during';
                    score = 1;
                    time = 60;
                    id  = setInterval(timer, 1000);
                    changePicture("starting");
                }
            }

            $(document).keypress(function(event){
                if (event.which == 97 ) {
                    console.log("llama");
                    clickedChoice("llama");
                }
                else if (event.which == 108 ) {
                    clickedChoice("lava");
                }
            });


            function timer() {
                time-=1;
                document.getElementById("timer").innerHTML = time;
                if (time == 0) {
                    clearInterval(id);
                    mode = "done";
                    document.getElementById("maybeLlamamaybeLava").src = "images/start.JPG";
                    document.getElementById("scoreSubmit").action = "index.php?score=" + score;
                }
            }

            function clickedChoice(choi) {
                if (mode.substring(0, 4) == 'done') {
                    return;
                }
                if (current == choi) {
                    score += 1;
                }
                else {
                    score -= 1;
                }
                changePicture();
                document.getElementById("score").innerHTML = score;
            }

    		$('body').gradientify({
			    gradients: [
			        { start: [204, 51, 0], stop: [255, 255, 204] },
			        { start: [255, 255, 204], stop: [204, 51, 0] }
			    ]
			});

            let initials;
            function changeInitals() {
                initials = document.forms["ScoreForm"]["initials"].value;
            }
            function submitScore() {
                if (mode == 'done-submit') {
                    return;
                }
                mode = 'done-submit';
                console.log(initials);
                var xhttp; 
                xhttp = new XMLHttpRequest();
                xhttp.open("GET", "highscores.php?score=" + score + "&&initials=" + initials, true);
                xhttp.send();
            }

    	</script>
    </body>
</html>


















