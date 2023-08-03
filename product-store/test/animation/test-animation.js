let jumpButton = document.getElementById('jump');
let player = document.getElementById('player');
let enemy = document.getElementById('enemy');

let busy = false;

let stop = false;

jumpButton.addEventListener('click', ()=>{});

document.body.addEventListener('keypress', function(event){
    if (event.key === 'Space' || event.key === " "){
        toggleJump();
    }else{
        console.log(event.key);
    }
});

function jumpOnce() {
    if (busy){
        console.log('busy');
        return
    }
    player.classList.add('jump');
    enemy.classList.add('move-left')
    busy = true;
    setTimeout(()=>{
        player.classList.remove('jump');
        enemy.classList.remove('move-left');
        busy = false;
    }, 1000);
}

function toggleJump(){
    if (busy){
        player.classList.remove('jump');
        enemy.classList.remove('move-left');
        busy = false;
        return
    }
    player.classList.add('jump');
    enemy.classList.add('move-left');
    busy = true;
}