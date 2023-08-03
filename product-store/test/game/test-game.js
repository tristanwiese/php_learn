let player = document.getElementById('player');
let enemy = document.getElementById('enemy');
let playGround = document.getElementById('play-ground');
let gameTitle = document.getElementById('game-title');

let busy = false;

let stop = true;

document.body.addEventListener('keypress', function(event){
    console.log('fired');
    if (event.key === 'Enter'){
        if (stop){
            console.log('enter');
            playGround.style.display = 'flex';
            gameTitle.style.display = 'none';
            stop = false;
            randomPauseLoop(2);
            return;
        }
        stop = true;
        playGround.style.display = 'none';
        gameTitle.style.display = 'block';
        console.log('enter');
    }
    if (event.key === 'Space' || event.key === " "){
        jump();
        console.log('spacebar');
    }else{
        console.log(event.key);
    }
});


function moveLeft() {
    enemy.classList.add('move-left')
    setTimeout(()=>{
        enemy.classList.remove('move-left');
    }, 2000);
}

function jump() {
    if (busy){
        return
    }
    busy = true;
    player.classList.add('jump');
    setTimeout(()=>{
        player.classList.remove('jump');
        busy = false;
    }, 1000);
}

function randomPauseLoop(){
    if (stop){
        console.log('stop');
        return;
    }
    let x = Math.floor((Math.random() * 5) + 1.5);
    console.log(x);
    setTimeout(()=>{
        moveLeft();
        randomPauseLoop(x);
    }, x*1000)
}