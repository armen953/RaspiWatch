/* function pour permettre le chargement complet la page pour réaliser l'action */
function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

/**** Load function des boutons ****/

window.onload = function () {

    /**** ACTION DES BOUTONS CAM 1****/

    var btnStart = document.getElementById("btnStart");
    var btnStop = document.getElementById("btnStop");
    var btnRestart = document.getElementById("btnRestart");
    var btnQuit = document.getElementById("btnQuit");

    btnStart.addEventListener("click", buttonActionStart);
    btnStart.addEventListener("click", detectionStart);
    btnStop.addEventListener("click", buttonActionStop);
    btnStop.addEventListener("click", detectionStop);
    btnRestart.addEventListener("click", actionRestart);
    btnQuit.addEventListener("click", actionQuit);
    /*********************************/

    /**** ACTION DES BOUTONS CAM 2****/

    var btnStart2 = document.getElementById("btnStart2");
    var btnStop2 = document.getElementById("btnStop2");
    var btnRestart2 = document.getElementById("btnRestart2");
    var btnQuit2 = document.getElementById("btnQuit2");

    btnStart2.addEventListener("click", buttonActionStart2);
    btnStart2.addEventListener("click", detectionStart2);
    btnStop2.addEventListener("click", buttonActionStop2);
    btnStop2.addEventListener("click", detectionStop2);
    btnRestart2.addEventListener("click", actionRestart2);
    btnQuit2.addEventListener("click", actionQuit2);
    /*********************************/

    /**** ACTION DES BOUTONS CAM 3****/

    var btnStart3 = document.getElementById("btnStart3");
    var btnStop3 = document.getElementById("btnStop3");
    var btnRestart3 = document.getElementById("btnRestart3");
    var btnQuit3 = document.getElementById("btnQuit3");

    btnStart3.addEventListener("click", buttonActionStart3);
    btnStart3.addEventListener("click", detectionStart3);
    btnStop3.addEventListener("click", buttonActionStop3);
    btnStop3.addEventListener("click", detectionStop3);
    btnRestart3.addEventListener("click", actionRestart3);
    btnQuit3.addEventListener("click", actionQuit3);
    /*********************************/

    /**** ACTION DES BOUTONS CAM 4****/

    var btnStart4 = document.getElementById("btnStart4");
    var btnStop4 = document.getElementById("btnStop4");
    var btnRestart4 = document.getElementById("btnRestart4");
    var btnQuit4 = document.getElementById("btnQuit4");

    btnStart4.addEventListener("click", buttonActionStart4);
    btnStart4.addEventListener("click", detectionStart4);
    btnStop4.addEventListener("click", buttonActionStop4);
    btnStop4.addEventListener("click", detectionStop4);
    btnRestart4.addEventListener("click", actionRestart4);
    btnQuit4.addEventListener("click", actionQuit4);
    /*********************************/
}




/**** FUNCTION DES BOUTONS CAM 1****/

function detectionStart() {	
	var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/1/detection/start', false ); 
    xmlHttp.send( null );
    }

function detectionStop() {	
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/1/detection/pause', false ); 
    xmlHttp.send( null );
    
}

function actionQuit() {   
	var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/1/action/quit', false ); 
    xmlHttp.send( null );
}

function actionRestart() {	
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/1/action/restart', false ); 
    xmlHttp.send( null );
	
	
}
/****************************/

/**** FUNCTION DES BOUTONS CAM 2****/

function detectionStart2() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/2/detection/start', false ); 
    xmlHttp.send( null );
}

function detectionStop2() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/2/detection/pause', false ); 
    xmlHttp.send( null );
}

function actionQuit2() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/2/action/quit', false );
    xmlHttp.send( null );
}

function actionRestart2() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/2/action/restart', false ); 
    xmlHttp.send( null );
}
/****************************/

/**** FUNCTION DES BOUTONS CAM 3****/

function detectionStart3() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/3/detection/start', false ); 
    xmlHttp.send( null );
}

function detectionStop3() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/3/detection/pause', false ); 
    xmlHttp.send( null );
}

function actionQuit3() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/3/action/quit', false ); 
    xmlHttp.send( null );
}

function actionRestart3() {
  var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/3/action/restart', false ); 
    xmlHttp.send( null );
}
/****************************/

/**** FUNCTION DES BOUTONS CAM 4****/

function detectionStart4() {
   var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/3/detection/start', false ); 
    xmlHttp.send( null );
}

function detectionStop4() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/4/detection/pause', false ); 
    xmlHttp.send( null );
}

function actionQuit4() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/4/action/quit', false ); 
    xmlHttp.send( null );
}

function actionRestart4() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://172.23.40.235:8080/4/action/restart', false ); 
    xmlHttp.send( null );
}
/****************************/




/**** FUNCTION STATUS CHECKBOX CAPTURE MOTION CAM 1****/

function buttonActionStart() {
    if ((document.getElementById('fs').checked == false)) {
        document.getElementById('fs').checked = true;
    }
}

function buttonActionStop() {
    if ((document.getElementById('fs').checked == true)) {
        document.getElementById('fs').checked = false;
    }
}

/****************************/

/**** FUNCTION STATUS CHECKBOX CAPTURE MOTION CAM 2****/

function buttonActionStart2() {
    if ((document.getElementById('fs2').checked == false)) {
        document.getElementById('fs2').checked = true;
    }
}

function buttonActionStop2() {
    if ((document.getElementById('fs2').checked == true)) {
        document.getElementById('fs2').checked = false;
    }
}

/****************************/

/**** FUNCTION STATUS CHECKBOX CAPTURE MOTION CAM 3****/

function buttonActionStart3() {
    if ((document.getElementById('fs3').checked == false)) {
        document.getElementById('fs3').checked = true;
    }
}

function buttonActionStop3() {
    if ((document.getElementById('fs3').checked == true)) {
        document.getElementById('fs3').checked = false;
    }
}

/****************************/

/**** FUNCTION STATUS CHECKBOX CAPTURE MOTION CAM 4****/

function buttonActionStart4() {
    if ((document.getElementById('fs4').checked == false)) {
        document.getElementById('fs4').checked = true;
    }
}

function buttonActionStop4() {
    if ((document.getElementById('fs4').checked == true)) {
        document.getElementById('fs4').checked = false;
    }
}

/****************************/
