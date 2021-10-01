let h1 = $('h1');
let h2 = $('h2');
let h3 = $('h3');
let section = $('section');
let label = $('label');
let figure = $('figure');
let sectionOne = $('#sectionOne');
let sectionTwo = $('#sectionTwo');

if(h1){
    $(document).ready(function() {
        h1.each(function() {
            $(this).css({"position": "relative", "top": 0, "margin-top": -100});
            $(this).animate({top: '100px'}, 2000);
        });
    })

    $('h2:first').css({"margin-top": "170px"});

    setTimeout(function () {
        h2.each(function () {
            $(this).animate({rotate: '1turn'}, 1000);
        });
    }, 2000)
}

if(h3) {
    setTimeout(function () {
        h3.each(function () {
            $(this).animate({rotate: '-1turn'}, 1000);
        });
    }, 2000)
}

if(section) {
    section.each(function () {
        $(this).css("display","none");
    });
}

if(h2) {
    h2.each(function () {
        $(this).click(function () {
            if($(this).next().css("display") === "none") {
                $(this).next().css("display", "flex");
                $(this).html($(this).html().replace("→", "↓"));
            }
            else{
                $(this).next().css("display","none");
                $(this).html($(this).html().replace("↓", "→"));
            }
        });
    });
}

if(h3) {
    h3.each(function () {
        $(this).click(function () {
            if($(this).next().css("display") === "none") {
                $(this).next().css("display","flex");
                $(this).html($(this).html().replace("→", "↓"));
            }
            else{
                $(this).next().css("display","none");
                $(this).html($(this).html().replace("↓", "→"));
            }
        });
    });
}

if(label) {
    let arrayLabel = label.html().split('');
    let arrayLabelFixe = label.html();
    let x = 0;
    const y = label.html().length;

    let interval = function() {
        setInterval(function(){
            let red = x * x;
            let blue = x * x;
            let yellow = x * x;

            let letter;

            if(x%2 === 0) {
                letter = "<span style='color:rgb(" + red +", " + blue +", " + yellow +" );font-weight: bold;'>" + arrayLabelFixe.substr(x,1) + "</span>";
            }
            else {
                letter = "<span style='color:rgb(" + red +", " + blue +", " + yellow +" );font-style: italic;'>" + arrayLabelFixe.substr(x,1) + "</span>"
            }

            arrayLabel.splice(x, 1, letter);
            label.html(arrayLabel.join(''));
            x++;


            if(x > y) {
                label.html(arrayLabelFixe);
                arrayLabel = label.html().split('')
                x = 0;
            }
        },500);
    }

    interval();
}

let img = $('img');
let fig = $('figcation');

if(fig) {
    let u = 0;
    function rotate() {

        figure.off("mouseover");

        if(u === 0) {
            img.css({transform: "rotateY(+180deg)", transition: 'all 1s linear', transformStyle: "preserve-3d"});
            u++;
            if(figure.onmouseleave) {
                img.css({transform: "rotateY(0)", transition: 'all 1s linear', transformStyle: "preserve-3d"});
            }

        }
        else {
            console.log(u);
            img.css({transform: "rotateY(0)", transition: 'all 1s linear', transformStyle: "preserve-3d"});
            u--;
        }

        let timeImg = setTimeout(function () {
            if(img.attr('src') === "../doc/La_mariniere_60s.png") {
                img.attr('src',"../doc/maxi-coca.jpg");
            }
            else{
                img.attr('src',"../doc/La_mariniere_60s.png");
            }
        },500);

        let timeMouse = setTimeout(function () {
            figure.on("mouseover",rotate);
        },1000);
    }

    figure.on("mouseover", rotate);
}

$.ajax({
    type: 'GET',
    url: '../li.Json',
    dataType: "JSON"
})

.done(function (request) {
    let data = JSON.stringify(request);
    let nav = $('nav:first');

    let array = Object.keys(request[0]).map(key => [key, request[0][key]]);
    let ul = $('<ul>');
    nav.append(ul);

    for(let x = 0; x < array.length; x++) {
        let li = $('<li>');
        let a = $('<a>');
        a.attr('href',request[1][x]);
        a.append(request[0][x]);
        ul.append(li);
        li.append(a);
    }
})

$.ajax({
    type: 'GET',
    url: '../dd.Json',
    dataType: "JSON"
})

    .done(function (request) {
        let arrayOne = Object.keys(request[0][0]).map(key => [key, request[0][0][key]]);
        let dl = $('<dl>');
        sectionOne.append(dl);

        for(let x = 0; x < arrayOne.length; x++) {
            let dt = $('<dt>');
            let dd = $('<dd>');

            dd.html(request[0][1][x]);
            dt.html(request[0][0][x]);

            dl.append(dt);
            dl.append(dd);
        }

        let arrayTwo = Object.keys(request[1][0]).map(key => [key, request[1][0][key]]);
        dl = $('<dl>');
        sectionTwo.append(dl);

        for(let x = 0; x < arrayTwo.length; x++) {
            let dt = $('<dt>');
            let dd = $('<dd>');
            dd.html(request[1][1][x]);
            dt.html(request[1][0][x]);

            dl.append(dt);
            dl.append(dd);
        }
    })
