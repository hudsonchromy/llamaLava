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
    	<h1>Llama or Lava</h1>
        <div class="col-sm-12">
            <div class="col-sm-6">
                <h id="timer">60</h>
            </div>
            <div class="col-sm-6">
                <h id="score">0</h>
            </div>
        </div>
        <img src="images/start.jpg" id="maybeLlamamaybeLava" onclick="start()">
        <button onclick="clickedChoice('llama')">Llama (A)</button>
        <button onclick="clickedChoice('lava')">Lava (L)</button>
    	<script>
            var id;
            var current = "";
            var score = 0;
            function changePicture() {
                if(typeof id == 'undefined') {
                    start();
                } else if (id == 'done') {
                    return;
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
                id  = setInterval(timer, 1000);
                changePicture("starting");
                score += 1;
            }

            $(document).keypress(function(event){
                console.log(event.which);
                if (event.which == 97 ) {
                    clickedChoice("llama");
                }
                else if (event.which == 108 ) {
                    clickedChoice("lava");
                }
            });


            function timer() {
                document.getElementById("timer").innerHTML -= 1;
                if (document.getElementById("timer").innerHTML == 0) {
                    clearInterval(id);
                    id = "done";
                }
            }

            function clickedChoice(choi) {
                if (current == choi) {
                    score += 1;
                }
                else {
                    score -= 1;
                }
                changePicture();
                document.getElementById("score").innerHTML = score;
                console.log(score);
            }

    		$('body').gradientify({
			    gradients: [
			        { start: [204, 51, 0], stop: [255, 255, 204] },
			        { start: [255, 255, 204], stop: [204, 51, 0] }
			    ]
			});
    	</script>
    </body>
</html>