window.onload = getPic;

var img;

var canvas;
var stage;
 
var pieces;
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
    pieces = [];
    
}
