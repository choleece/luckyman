$(function(){
    getData();
    setInterval(function(){
        console.log(running);
        if (!running) {
            getData();
        }
    }, 1000);
});

$(document).ready(function(){
    $("#sign-button").click(function(){
        if ($("#sign-button").html() === '开始签到') {
            $("#bg-code").addClass("bg-code");
            $("#sign-button").html('停止签到');
        } else {
            $("#sign-button").html('开始签到') ;
            $("#bg-code").removeClass("bg-code");
        }
    });
});

/**
 * 获取数据
 */
function getData() {
    $.ajax({
        type: 'GET',
        url: 'signer',
        data: {},
        dataType: 'json',
        success: function (res) {
            if (res.code === 0) {
                if (member.length !== res.data.length) {
                    member = res.data;
                    genCanvas();
                }
            }
        }
    })
}

function genCanvas() {
    var choosed = JSON.parse(localStorage.getItem('choosed')) || {};
    var speed = function(){
        return [0.1 * Math.random() + 0.01, -(0.1 * Math.random() + 0.01)];
    };
    var getKey = function(item){
        return item.name + '-' + item.tel;
    };
    var createHTML = function(){
        var html = [ '<ul>' ];
        member.forEach(function(item, index){
            item.index = index;
            var key = getKey(item);
            var color = choosed[key] ? 'yellow' : 'white';
            html.push('<li><a href="#" style="color: ' + color + '; font-weight: bold; font-size: 18px">' + item.name + '</a></li>');
        });
        html.push('</ul>');
        return html.join('');
    };
    var canvas = document.getElementById("myCanvas");
    if (!canvas) {
        canvas = document.createElement('canvas');
        canvas.id = 'myCanvas';
        canvas.width = document.body.offsetWidth -400;
        canvas.height = document.body.offsetHeight;
        document.getElementById('main').appendChild(canvas);
    }

    canvas.innerHTML = createHTML();
    TagCanvas.Start('myCanvas', '', {
        textColour: null,
        initial: speed(),
        dragControl: 1,
        textHeight: 14
    });
};
