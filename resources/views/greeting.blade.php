<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'info 2021</title>

    <!-- Script -->
    <script type="text/javascript">
    function switch_theme(){
        var element = document.getElementById("content");
        element.classList.toggle("darkMode");
    }
    var snow = {

        wind : 0,
        maxXrange : 100,
        minXrange : 10,
        maxSpeed : 2,
        minSpeed : 1,
        color : "#fff",
        char : "*",
        maxSize : 20,
        minSize : 8,

        flakes : [],
        WIDTH : 0,
        HEIGHT : 0,

        init : function(nb){
            var o = this,
                frag = document.createDocumentFragment();
            o.getSize();

            var elem = document.getElementById('noel');
            var topstart = 0;
            var leftstart = 0;
   
            while(elem.tagName != "BODY") {
                topstart += elem.offsetTop;
                leftstart += elem.offsetLeft;
                elem = elem.offsetParent;
            }

            for(var i = 0; i < nb; i++){
                var flake = {
                    x : o.random(o.WIDTH) + leftstart,
                    y : - o.maxSize + topstart,
                    xrange : o.minXrange + o.random(o.maxXrange - o.minXrange),
                    yspeed : o.minSpeed + o.random(o.maxSpeed - o.minSpeed, 100),
                    life : 0,
                    size : o.minSize + o.random(o.maxSize - o.minSize),
                    html : document.createElement("span")
                };

                flake.html.style.position = "absolute";
                flake.html.style.top = flake.y + "px";
                flake.html.style.left = flake.x + "px";
                flake.html.style.fontSize = flake.size + "px";
                flake.html.style.color = o.color;
                flake.html.appendChild(document.createTextNode(o.char));

                frag.appendChild(flake.html);
                o.flakes.push(flake);
            }

            document.body.appendChild(frag);
            o.animate();
        },

        animate : function(){
            var elem = document.getElementById('noel');
            var topstart = 0;
            var leftstart = 0;
   
            while(elem.tagName != "BODY") {
                topstart += elem.offsetTop;
                leftstart += elem.offsetLeft;
                elem = elem.offsetParent;
            }

            var o = this;
            for(var i = 0, c = o.flakes.length; i < c; i++){
                var flake = o.flakes[i],
                    top = flake.y + flake.yspeed,
                    left = flake.x + Math.sin(flake.life) * flake.xrange + o.wind;
                if(top < o.HEIGHT - flake.size - 10 && left < o.WIDTH - flake.size && left > 0){
                    flake.html.style.top = top + "px";
                    flake.html.style.left = left + "px";
                    flake.y = top;
                    flake.x += o.wind;
                    flake.life+= .01;
                }
                else {
                    flake.html.style.top = -o.maxSize + "px";
                    flake.x = o.random(o.WIDTH) + leftstart;
                    flake.y = -o.maxSize + topstart;
                    flake.html.style.left = flake.x + "px";
                    flake.life = 0;
                }
            }
            setTimeout(function(){
                o.animate();
            },20);
        },

        random : function(range, num){
            var num = num?num:1;
            return Math.floor(Math.random() * (range + 1) * num) / num;
        },

        getSize : function(){
            var elem = document.getElementById('noel');

            var topstart = 0;
            var leftstart = 0;
   
            while(elem.tagName != "BODY") {
                topstart += elem.offsetTop;
                leftstart += elem.offsetLeft;
                elem = elem.offsetParent;
            }

            if (elem != null) {
                this.WIDTH = elem.clientWidth - leftstart;
                this.HEIGHT = elem.clientHeight;
            }
        }

        };
    </script>

    <link rel="stylesheet" href="https://unpkg.com/@vtmn/css" />
</head>
<body>
    <script src="main.js"></script>
    <div id="content">
        <div id="menu">

            @include('navBar')
            
            <div class="vtmn-toggle">
                <div class="vtmn-toggle_switch">
                    <input type="checkbox" id="theme" onchange="switch_theme()"/>
                    <span aria-hidden="true"></span>
                </div>
                <label for="theme">Thème sombre</label>
            </div>
        </div>
        @include('forumNoel')
        @include('findYourHero')
    </div>
</body>
</html>