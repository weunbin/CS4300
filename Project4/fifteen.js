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
    }

}


function move(){
    var piece = document.getElementById(this.id);
    var positions = this.id.split("_");
    var x = parseInt(positions[1]);
    var y = parseInt(positions[2]);
    var nexX;
    var newY;
    var movePos = checkNeighbors(piece,x,y);
    switch(movePos){
        case 1:
            piece.id = "piece_" + x+1 + "_" + y;
            if(x > 0)
                nexX = ((x+1)-1)*100;
            else
                newX = 0;
            if(y > 0)
                nexY = (y-1)* 100;
            else
                newY = 0;
            piece.style.top = newX + "px";
            piece.style.left = newY + "px";
            break;
        case 2:
            piece.id = "piece_" + x-1 + "_" + y;
            if(x-1 > 0)
                nexX = ((x-1)-1)*100;
            else
                newX = 0;
            if(y > 0)
                nexY = (y-1)* 100;
            else
                newY = 0;
            piece.style.top = newX + "px";
            piece.style.left = newY + "px";
            break;
        case 3:
            piece.id = "piece_" + x + "_" + y-1;
            if(x > 0)
                nexX = (x-1)*100;
            else
                newX = 0;
            if(y-1 > 0)
                nexY = ((y-1)-1)* 100;
            else
                newY = 0;
            piece.style.top = newX + "px";
            piece.style.left = newY + "px";
            break;
        case 4:
            piece.id = "piece_" + x + "_" + y+1;
             if(x > 0)
                nexX = (x-1)*100;
            else
                newX = 0;
            if(y > 0)
                nexY = ((y+1)-1)* 100;
            else
                newY = 0;
            piece.style.top = newX + "px";
            piece.style.left = newY + "px";
            
            break;
    }
    

}

function shuffle(){

}


function checkNeighbors(piece,x,y){
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









