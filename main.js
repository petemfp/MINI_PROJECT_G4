$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    autoWidth:true,
    autoHigth:true,
    dots:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

/*
var lastClickedFace = null;

const divs = document.querySelectorAll('.rom');
Array.from(divs).forEach(div => {
    div.addEventListener('click', classToggler);
});

const colors = ['forest', 'field', 'beach', 'mine', 'ocean'];
let	enumerator = 0;

function classToggler() {
if (enumerator < colors.length+1){
  	enumerator+=1;
  }
 else {enumerator=0};


this.classList.add(colors[enumerator]);
this.classList.remove(colors[enumerator-1]);
const yellows = document.querySelectorAll('.beach')
const infoLabel = document.querySelector('#info')
infoLabel.innerHTML = "There are " + yellows.length + " yellow box(es)." 
};*/