import '../css/home.css';

const prev = document.querySelector('#prev');
const next = document.querySelector('#next');

let x = 12;
let y = 22;

prev.addEventListener('click', function() {
    let portrait = document.querySelectorAll('.portrait');
    portrait.forEach(portrait => {
        portrait.id = portrait.id - 1;

        if(portrait.id == 0){
            (portrait.id = 4);
            portrait.classList.remove("one");
            portrait.classList.toggle("two");
        }

        if(portrait.id == 1){
            portrait.classList.remove("main");
            portrait.classList.toggle("behind");
            portrait.classList.toggle("one");
        }

        if(portrait.id == 2){
            portrait.classList.remove("back");
            portrait.classList.toggle("main");
        }

        if(portrait.id == 3){
            portrait.classList.remove("behind");
            portrait.classList.remove("two");
            portrait.classList.toggle("back");
        }
    });

    x = x - 1;
    y = y - 1;
    if(x==10){
        x = 14;
        y = 24;
    };


    let dotON = document.querySelector('.ON');
    dotON.classList.remove("ON");

    let dotY = document.getElementById(y);
    dotY.classList.toggle("ON");
});

next.addEventListener('click', function() {
    let portrait = document.querySelectorAll('.portrait');
    portrait.forEach(portrait => {
        portrait.id = ++portrait.id;

        if(portrait.id == 5){
            (portrait.id = 1);
            portrait.classList.toggle("one");
            portrait.classList.remove("two");           
        }

        if(portrait.id == 2){
            portrait.classList.toggle("main");
            portrait.classList.remove("behind");
            portrait.classList.remove("one");
        }

        if(portrait.id == 3){
            portrait.classList.toggle("back");
            portrait.classList.remove("main");
        }

        if(portrait.id == 4){
            portrait.classList.toggle("behind");
            portrait.classList.toggle("two");
            portrait.classList.remove("back");
        }
    });

    x = ++x;
    y = ++y;
    if(x==15){
        x = 11;
        y = 21;
    };

    // let selected = document.querySelector('.selected');
    // selected.classList.remove("selected");

    // let selectedX = document.getElementById(x);
    // selectedX.classList.toggle("selected");
    
    let dotON = document.querySelector('.ON');
    dotON.classList.remove("ON");

    let dotY = document.getElementById(y);
    dotY.classList.toggle("ON");
   
    
});