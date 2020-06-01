function bar(id, values) {
    var canvas = document.getElementById(id);
    var top = canvas.width * 0.8;
    var bar_height = canvas.height * 0.8;
    var ctx = canvas.getContext("2d");
    var fontHeight = 12;
    ctx.font = fontHeight + "px Ariel";

    var bar_width = 40;
    var bar_postion = 50;
    //ctx.scale(over * 0.8, down * 0.8);
    for (var i = 0; i < values.length; i++) {
        
        var hue = (360 * i) / values.length;
        ctx.fillStyle = "hsl(" + hue + ", 100%, 70%)";

        var all = values[i];
        var txt = '  ' + all.lbl + '  ';




        ctx.fillRect(bar_postion, bar_height + (canvas.height - bar_height) - (canvas.height * 0.1), bar_width, all.val * -50);
        
        ctx.fillText(txt, bar_postion, bar_height + (canvas.height - bar_height));

        bar_postion += (bar_width + 15);
        

    }
    
}