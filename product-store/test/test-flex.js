let slider = document.getElementById('width-slider');
let verticalSlider = document.getElementById('height-slider');

let flexBox = document.getElementById('flex-box');
slider.oninput = function (){
    let text = `${slider.value}px`;
    flexBox.style.width = text;
}
verticalSlider.oninput = function (){
    let text = `${verticalSlider.value}px`;
    flexBox.style.height = text;
}