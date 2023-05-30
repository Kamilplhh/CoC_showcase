import '../css/app.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $ from 'jquery';
window.$ = $;

$('#12').toggleClass("selected");

$('#1').toggleClass("behind");
$('#1').toggleClass("one");

$('#2').toggleClass("main");
$('#3').toggleClass("back");

$('#4').toggleClass("behind");
$('#4').toggleClass("two");

$('.more').click(function(){
    alert("Function in development");
})