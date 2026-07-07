<script>

let slides=document.querySelectorAll(".slide");

let index=0;

setInterval(function(){

slides[index].classList.remove("active");

index++;

if(index>=slides.length){

index=0;

}

slides[index].classList.add("active");

},3000);

</script>
<script>

const elements = document.querySelectorAll(".fade");

window.addEventListener("scroll", function(){

elements.forEach(function(el){

const position = el.getBoundingClientRect().top;
const screen = window.innerHeight;

if(position < screen - 100){
el.classList.add("show");
}

});

});

</script>