/* function pour permettre le chargement complet la page pour réaliser l'action */
function sleep(milliseconds) {
    var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds){
              break;
            }
    }
}

function detectionStart()
{
    /* a tester pour décider quelle méthode utiliser + modifier link évidemment */
    var start = window.open('https://www.google.fr/','start','menubar=no, scrollbars=no, top=5000, left=5000, width=1, height=1');  
    start.close();
}

function detectionStop()
{
    /* a tester pour décider quelle méthode utiliser + modifier link évidemment */
    var stop = window.open('https://www.google.fr/','stop','menubar=no, scrollbars=no, top=5000, left=5000, width=1, height=1');  
    stop.close();
}

function detectionStatus()
{
        // à faire
}

function detectionConnection()
{
        // à faire
}