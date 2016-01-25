<!DOCTYPE html>
<html lang="en">
<head>

<script>
var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function newBoard(){
	tiles_flipped = 0;
	var output = '';
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
}
function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){
		tile.style.background = '#FFF';
		tile.innerHTML = val;
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if(memory_values.length == 1){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			if(memory_values[0] == memory_values[1]){
				tiles_flipped += 2;
				// Clear both arrays
				memory_values = [];
            	memory_tile_ids = [];
				// Check to see if the whole board is cleared
				if(tiles_flipped == memory_array.length){
					alert("Board cleared... generating new board");
					document.getElementById('memory_board').innerHTML = "";
					newBoard();
				}
			} else {
				function flip2Back(){
				    // Flip the 2 tiles back over
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
            	    tile_1.innerHTML = "";
				    tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
            	    tile_2.innerHTML = "";
				    // Clear both arrays
				    memory_values = [];
            	    memory_tile_ids = [];
				}
				setTimeout(flip2Back, 700);
			}
		}
	}
}

</script>

</head>

<body>

<?php $this->load->view('includes/header'); ?>

<div class="container">
  <h4 id="fontovi"> GAMES</h4>
  <ul class="nav nav-pills" id="fontovi">
    <li class="active"><a data-toggle="pill" href="#home">MEMORYGAME</a></li>
    <li><a data-toggle="pill" href="#menu1">HITGAME</a></li>
    <li><a data-toggle="pill" href="#menu2">DICEROLL</a></li>
  </ul>
  
  <div class="tab-content">
  
    <div id="home" class="tab-pane fade in active">
      <p>
	  <div id="memory_board"></div>
	  <script>newBoard();</script>
	  </p>
    </div>
    
	<div id="menu1" class="tab-pane fade">
	 <p>
  	  <canvas id="my_canvas" width="500" height="350"></canvas>
        <div>
          <button id="left_btn">Move Left</button>
		  <button id="fire_btn">Fire Missile</button>
          <button id="right_btn">Move Right</button>
        </div>
      <h3 id="status"></h3>
	  </p>
    </div>
    
	<div id="menu2" class="tab-pane fade">
      <p>
	   <div id="die1" class="dice">0</div>
       <div id="die2" class="dice">0</div>
       <button onclick="rollDice()">Roll Dice</button>
       <h2 id="status1" style="clear:left;"></h2>
      </p>
    </div>
    	
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>

</body>
</html>
