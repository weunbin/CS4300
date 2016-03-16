window.onload = init;

var img;

var canvas;
var stage;
var emptyX = 4;
var emptyY = 4;
var pieces = [];
var puzzleWidth = 400;
var puzzleHeight = 400;
var pieceWidth = 100;
var pieceHeight = 100;
var currentPiece;
var currentDropPiece;

var mouse;

function init()
{
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
    var row = 1;
    var col = 0;

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
            row += 1;
            col = 0;
        }
        pieces[i].style.backgroundPositionX = backgroundX + "px";
        pieces[i].style.backgroundPositionY = backgroundY + "px";
        pieces[i].style.left = left + "px";
        pieces[i].style.top = top + "px";
        backgroundX -= 100;
        left += 100;
        col += 1;
        pieces[i].id = "piece_" + row + "_" + col;
        pieces[i].onclick = move;
        pieces[i].onmouseover = red
        pieces[i].onmouseout = black;
    }
    document.getElementById("shufflebutton").onclick = shuffle;
}

function red() {
    var piece = document.getElementById(this.id);
    var positions = this.id.split("_");
    var row = parseInt(positions[1]);
    var col = parseInt(positions[2]);
    var movePos = checkNeighbors(row,col);
    if (movePos != 0) {
        piece.style.borderColor = "red";
        piece.style.color = "red";
    }
}

function black() {
    var piece = document.getElementById(this.id);
    var positions = this.id.split("_");
    var row = parseInt(positions[1]);
    var col = parseInt(positions[2]);
    var movePos = checkNeighbors(row,col);
    if (movePos != 0) {
        piece.style.borderColor = "black";
        piece.style.color = "black";
    }
}

function move(){
    var piece = document.getElementById(this.id);
    var positions = this.id.split("_");
    var row = parseInt(positions[1]);
    var col = parseInt(positions[2]);
    var movePos = checkNeighbors(row,col);
    switch(movePos){
        case 1:
            piece.style.top = ((row-2)*100) + "px";
            piece.id = "piece_" + (row-1) + "_" + col;
            break;
        case 2:
            piece.style.top = ((row)*100) + "px";
            piece.id = "piece_" + (row+1) + "_" + col;
            break;
        case 3:
            piece.style.left = ((col-2)*100) + "px";
            piece.id = "piece_" + row + "_" + (col-1);
            break;
        case 4:
            piece.style.left = ((col)*100) + "px";
            piece.id = "piece_" + row + "_" + (col+1);
            break;
    }
}

function shuffle() {
    var moves = 0;
    while (moves < 500) {
        var tile = Math.floor(Math.random() * (14 - 0 + 1)) + 0;
        var positions = pieces[tile].id.split("_");
        var row = parseInt(positions[1]);
        var col = parseInt(positions[2]);
        var movePos = checkNeighbors(row,col);
        if (movePos == 1) {
            moves++;
            pieces[tile].style.top = ((row-2)*100) + "px";
            pieces[tile].id = "piece_" + (row-1) + "_" + col;
        } else if (movePos == 2) {
            moves++;
            pieces[tile].style.top = ((row)*100) + "px";
            pieces[tile].id = "piece_" + (row+1) + "_" + col;
        } else if (movePos == 3) {
            moves++;
            pieces[tile].style.left = ((col-2)*100) + "px";
            pieces[tile].id = "piece_" + row + "_" + (col-1);
        } else if (movePos == 4) {
            moves++;
            pieces[tile].style.left = ((col)*100) + "px";
            pieces[tile].id = "piece_" + row + "_" + (col+1);
        }
    }
}

function checkNeighbors(x,y){
    var movePosition = 0;
    var row = 0;
    var col = 0;
    if(x < 4 ){
        row = x + 1;
        var id = "piece_" + row + "_" + y;
        var checkPiece = document.getElementById(id);
        if(checkPiece == null){
            movePosition = 2;
        }
        row = 0;
    }
    if(x > 1){
        row = x - 1;
        var id = "piece_" + row + "_" + y;
        var checkPiece = document.getElementById(id);
        if(checkPiece == null){
            movePosition = 1;
        }
        row = 0;
    }
    if(y < 4){
        col = y + 1;
        var id = "piece_" + x + "_" + col;
        var checkPiece = document.getElementById(id);
        if(checkPiece == null){
            movePosition = 4;
        }
        col = 0;
    }
    if(y > 1){
        col = y - 1;
        var id = "piece_" + x + "_" + col;
        var checkPiece = document.getElementById(id);
        if(checkPiece == null){
            movePosition = 3;
        }
        col = 0;
    }
    return movePosition;
}
