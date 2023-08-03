import {Player} from './player.js'

let canvas = document.getElementById("canvas");
let context = canvas.getContext("2d")

let CANVAS_WIDTH = canvas.width = 700;
let CANVAS_HEIGHT = canvas.height = 500;

context.clearRect(0,0, CANVAS_WIDTH, CANVAS_HEIGHT)

let player = new Player(CANVAS_WIDTH, CANVAS_HEIGHT, 30, 30, 'blue');

player.draw(context);