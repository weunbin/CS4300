window.onload = getPic;

var img;

var canvas;
var stage;
 
var pieces = [];
var puzzleWidth = 400;
var puzzleHeight = 400;
var pieceWidth = 100;
var pieceHeight = 100;
var currentPiece;
var currentDropPiece;

var mouse;

function getPic()
{
    document.body.style.backgroundImage = "url('background.jpg')";
    initPuzzle();
}


function onPage()
{
    img = new Image();
    img.addEventListener('load', onImage, false);
    img.src = "background.jpg";
}

function onImage(e)
{
    setCanvas();
    initPuzzle();
}

function initPuzzle()
{
    var top = 0;
    var left = 0;
    var backgroundX = 0;
    var backgroundY = 0;
    var puzzleArea = document.getElementById("puzzlearea");
    puzzleArea.style.height = "400px";
    puzzleArea.style.width = "400px";
    puzzleArea.style.backgroundSize = "400px 400px";
    var puzzle = document.getElementById("puzzlearea").getElementsByTagName("div");
    for(var i = 0; i < puzzle.length; i ++){
        pieces[i] = puzzle[i];
        pieces[i].style.position = "absolute";
        pieces[i].style.height = "90px";
        pieces[i].style.width = "90px";
        if(i % 4 == 0 && i != 0){
            top += 100;
            left = 0;
            backgroundX = 0;
            backgroundY -= 100;
        }
        pieces[i].style.backgroundPositionX = backgroundX + "px ";
        pieces[i].style.backgroundPositionY = backgroundY + "px";
        pieces[i].style.left = left + "px";
        pieces[i].style.top = top + "px";
        backgroundX -= 100;
        left += 100;
    }
    
}

function move(){
    
}

function shuffle(){
    
}


function checkNeighbors(){
    
}









