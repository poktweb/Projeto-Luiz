


document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: "responsive",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    autoplay: {
      delay: 2500, // Tempo em milissegundos entre cada slide
      disableOnInteraction: false, // Desativar autoplay quando interagir com o slider (clicar, arrastar, etc.)
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      130: {
        slidesPerView: 1,

      },

      340: {
        slidesPerView: 2,

      },
      590: {
        slidesPerView: 3,

      },
      760: {
        slidesPerView: 4,

      },
      990: {
        slidesPerView: 5,

      },
      1180: {
        slidesPerView: 7,

      },
      1024: {
        slidesPerView: 6,

      },
    },

  });
});



var minutes = 30;
var seconds = 0;
var timerInterval;

function updateTimer() {
  var timerElement = document.getElementById('timer');
  timerElement.textContent = formatTime(minutes) + ':' + formatTime(seconds);

  if (minutes === 0 && seconds === 0) {
    clearInterval(timerInterval);
    handleTimerEnd();
  } else {
    if (seconds === 0) {
      minutes--;
      seconds = 59;
    } else {
      seconds--;
    }
  }
}

function formatTime(time) {
  return time < 10 ? '0' + time : time;
}

function handleTimerEnd() {
  var buyButtons = document.querySelectorAll('#buyButton');
  buyButtons.forEach(function (button) {
    button.style.backgroundColor = 'red';
    button.style.pointerEvents = 'none'; // Desativa a interação com o botão
    button.textContent = 'Expirado';
  });

  alert("tempo de desconto acabou!");

}

timerInterval = setInterval(updateTimer, 1000);



