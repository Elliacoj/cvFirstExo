let h1 = document.querySelector("h1");
let h2 = document.querySelectorAll("h2");
let h3 = document.querySelectorAll("h3");
let section = document.querySelectorAll("section");
let label = document.querySelector("label")
let figure = document.querySelector("figure");
let sectionOne = document.getElementById('sectionOne');
let sectionTwo = document.getElementById('sectionTwo');

if(h1) {
    h1.animate([
        { transform: 'translateY(-100px)' },
        { transform: 'translateY(0)' }
    ], {
        duration: 3000,
        iterations: 1
    });
}


setTimeout(function () {
    h2.forEach(function (e) {
        e.animate([
            { rotate: '1turn' },
        ], {
            duration: 3000,
            iterations: 1
        });
    });
}, 3000)

if(h3) {
    setTimeout(function () {
        h3.forEach(function (e) {
            e.animate([
                { rotate: '-1turn' },
            ], {
                duration: 3000,
                iterations: 1
            });
        });
    }, 3000)
}

if(section) {
    section.forEach(function (e) {
        e.style.display = "none";
    });
}

if(h2) {
    h2.forEach(function (e) {
        e.addEventListener("click", function () {
            if(e.nextElementSibling.style.display === "none") {
                e.nextElementSibling.style.display = "flex";
                e.innerHTML = e.innerHTML.replace("→", "↓");
            }
            else{
                e.nextElementSibling.style.display = "none";
                e.innerHTML = e.innerHTML.replace("↓", "→");
            }

        });
    });
}

if(h3) {
    h3.forEach(function (e) {
        e.addEventListener("click", function () {
            if(e.nextElementSibling.style.display === "none") {
                e.nextElementSibling.style.display = "flex";
                e.innerHTML = e.innerHTML.replace("→", "↓");
            }
            else{
                e.nextElementSibling.style.display = "none";
                e.innerHTML = e.innerHTML.replace("↓", "→");
            }
        });
    });
}

if(label) {
    let arrayLabel = label.innerHTML.split('');
    let arrayLabelFixe = label.innerHTML;
    let x = 0;
    const y = label.innerHTML.length;

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
            label.innerHTML = arrayLabel.join('');

            x++;


            if(x > y) {
                label.innerHTML = arrayLabelFixe;
                arrayLabel = label.innerHTML.split('')
                x = 0;
            }
        },500);
    }

    interval();

}

let img = document.querySelector("img");
let fig = document.querySelector("figcaption");

if(fig) {
    let u = 0;
    function rotate() {
        figure.removeEventListener("mouseover",rotate);
        if(u === 0) {
            img.style.transform = "rotateY(180deg)";
        }

        if(u === 0) {
            let animation = img.animate([
                { transform: 'rotateY(0)' },
                { transform: 'rotateY(180deg)' }
            ], {
                duration: 1000,
            });
            u++;
        }
        else {
            let animation = img.animate([
                { transform: 'rotateY(180deg)' },
                { transform: 'rotateY(0)' }
            ], {
                duration: 1000,
            });
            u--;
        }

        let timeImg = setTimeout(function () {
            if(img.src == "http://localhost:63342/cvFirstExo/doc/La_mariniere_60s.png") {
                img.src = "../doc/maxi-coca.jpg";
            }
            else{
                img.src = "../doc/La_mariniere_60s.png";
            }
        },500);

        let timeMouse = setTimeout(function () {
            figure.addEventListener("mouseover",rotate);
            if(u === 1) {
                img.style.transform = "rotateY(180deg)";
            }
            else {
                img.style.transform = "rotateY(0)";
            }
        },1000);
    }

    figure.addEventListener("mouseover",rotate);
}

let xml = new XMLHttpRequest();

if(document.querySelector('nav')) {
    xml.overrideMimeType("application/json");
    xml.open("GET", "../li.Json", true);
    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            let response = JSON.parse(xml.responseText);
            let nav = document.querySelector('nav');

            let array = Object.keys(response[0]).map(key => [key, response[0][key]]);
            for(let x = 0; x < array.length; x++) {

                let ul = document.createElement("ul")
                let li = document.createElement("li");
                let a = document.createElement("a");
                a.href = response[1][x];
                a.innerHTML = response[0][x];
                nav.appendChild(ul);
                ul.appendChild(li);
                li.appendChild(a);
            }
        }
    }
    xml.send();
}

if(sectionOne) {

    xml.overrideMimeType("application/json");
    xml.open("GET", "../dd.Json", true);
    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            let response = JSON.parse(xml.responseText);
            let sectionOne = document.getElementById('sectionOne');
            let sectionTwo = document.getElementById('sectionTwo');

            let arrayOne = Object.keys(response[0][0]).map(key => [key, response[0][0][key]]);
            for(let x = 0; x < arrayOne.length; x++) {

                let dl = document.createElement("dl")
                let dt = document.createElement("dt");
                let dd = document.createElement("dd");
                dd.innerHTML = response[0][1][x];
                dt.innerHTML = response[0][0][x];
                sectionOne.appendChild(dl);
                dl.appendChild(dt);
                dl.appendChild(dd);
            }

            let arrayTwo = Object.keys(response[1][0]).map(key => [key, response[1][0][key]]);
            for(let x = 0; x < arrayTwo.length; x++) {

                let dl = document.createElement("dl")
                let dt = document.createElement("dt");
                let dd = document.createElement("dd");
                dd.innerHTML = response[1][1][x];
                dt.innerHTML = response[1][0][x];
                sectionTwo.appendChild(dl);
                dl.appendChild(dt);
                dl.appendChild(dd);
            }
        }
    }
    xml.send();
}
