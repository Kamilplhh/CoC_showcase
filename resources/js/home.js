import '../css/home.css';


const dots = document.querySelectorAll('.dot');

const prev = document.querySelector('#prev');
const next = document.querySelector('#next');

prev.addEventListener('click', function() {
    
    let portrait = document.querySelectorAll('.portrait');
    console.log(portrait);
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
})