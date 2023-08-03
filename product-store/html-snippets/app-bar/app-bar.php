<link rel="stylesheet" href="html-snippets\app-bar\app-bar.css?123">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="app-bar-container">
    <div class="side-bar hidden visualy-hidden-translation" id="side-bar">
        <div id="close-side-bar-tile" class="prevent-select">
            <p class="close-side-bar-tile-text" id="close-side-bar-text">
                Close
            </p>
        </div>
        <div class="side-bar-tile" id="profile">
        <div class="side-bar-tile-text">
                Profile
            </div>
            <div class="material-icons side-bar-tile-icon prevent-select" id="side-bar-tile-icon">person</div>
        </div>
        <div class="side-bar-tile" id="settings">
            <div class="side-bar-tile-text">
                Settings
            </div>
            <div class="material-icons side-bar-tile-icon prevent-select" id="side-bar-tile-icon">settings</div>
        </div>
        <div class="side-bar-tile" id="3">
        </div>
        <div class="side-bar-tile" id="4">
        </div>
        <div class="side-bar-tile" id="5">
        </div>
    </div>
    <div class="app-bar">
    <div class="app-bar-icon center">
    <i class="material-icons prevent-select" id="menu-icon">menu</i>
    </div>
        <p class="app-bar-title">
            <?php
            echo $title;
            ?>
        </p>
        <div class="app-bar-icon center">
        <a href="pages/cart-page.php">
        <i class="material-icons icons" id="cart-icon">shopping_cart</i>
        </a>
        </div>
    </div>
</div>
<script>
    let sideBarTileAudio = new Audio();
    sideBarTileAudio.src = "assets/audio/side-bar-tile-audio-soft.wav";
    let mouseClickAudio = new Audio();
    mouseClickAudio.src = "assets/audio/mouse-click.wav";

    let body = document.body;
    let menuIcon = document.getElementById("menu-icon");
    let sideBar = document.getElementById("side-bar");
    let sideBarCLoseTile = document.getElementById("close-side-bar-tile");
    let sideBarTiles = document.querySelectorAll(".side-bar-tile");

    menuIcon.addEventListener('click', ()=> menuIconClickEvent());

    sideBarCLoseTile.addEventListener('click', ()=> closeSideBar());

    sideBarTiles.forEach(tile => {
        tile.addEventListener('mouseenter', ()=>{sideBarTileAudio.play()})
    });

    body.addEventListener('click', ()=> mouseClickAudio.play())

    function menuIconClickEvent(){
        sideBar.classList.remove('hidden');
        setTimeout(function () {
        sideBar.classList.remove('visualy-hidden-translation');
        }, 1);
    }
    function closeSideBar(){
        sideBar.classList.add('visualy-hidden-translation');    
        setTimeout(function (){
            sideBar.classList.add('hidden');
        }, 400)
    }

    sideBarTiles.forEach(tile => {
        tile.addEventListener('click', ()=> sideBartileClickEvent(tile.id));
    });

    function sideBartileClickEvent(id){
        console.log(id);
    }

</script>