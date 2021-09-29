let h1 = document.querySelector("h1");
let h2 = document.querySelectorAll("h2");
let h3 = document.querySelectorAll("h3");
let section = document.querySelectorAll("section");
let label = document.querySelector("label")

h1.animate([
    { transform: 'translateY(-100px)' },
    { transform: 'translateY(0)' }
], {
    duration: 3000,
    iterations: 1
});

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

section.forEach(function (e) {
    e.style.display = "none";
});

h2.forEach(function (e) {
    e.addEventListener("mouseenter", function () {
        e.nextElementSibling.style.display = "flex";
    });
});

h3.forEach(function (e) {
    e.addEventListener("mouseenter", function () {
        e.nextElementSibling.style.display = "flex";
    });
});

let arrayLabel = label.innerHTML.split();

for(let x = 0; x < label.innerHTML.length; x++) {
    let red = 5 * x;
    let blue = 7 * x;
    let yellow = 9 * x;
    arrayLabel.splice(x, 1, "<span style='color:rgb(" + red +", " + blue +", " + yellow +" )'>" + label.innerHTML.substr(x,1) + "</span>")
}

label.innerHTML = arrayLabel.join('');