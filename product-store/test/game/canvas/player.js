export class Player{
    constructor(game_width, game_height, player_width, player_height, player_color){
        this.width = player_width;
        this.height = player_height;
        this.color = player_color

        this.position = {
            x: game_width / 2 - this.width / 2,
            y: game_height / 2 - this.height / 2
        }
    }

    draw(ctx){
        ctx.fillStyle = player_color;
        ctx.fillRect(this.position.x, this.position.y, this.width, this.height);
    }
}