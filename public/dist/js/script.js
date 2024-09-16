// Course-Category
$('.events').owlCarousel({
    loop:true,
    margin:20,
    dotsEach:2/true,
    nav:true,
    responsive:{
        0:{
            items:1.5
        },
        767:{
            items:3
        },
        991:{
            items:4
        },
        1024:{
            items:5
        }
    }
})


// events-details-login
const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');
const inputField = document.getElementById('input');

minusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue - 1;
});

plusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
});