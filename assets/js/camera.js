document.addEventListener("DOMContentLoaded", function() {
  const countdownElement = document.getElementById("countdown-timer");
  let timeLeft = parseInt(countdownElement.dataset.start);

  const timerInterval = setInterval(() => {
    timeLeft--;

    if (timeLeft >= 0) {
      countdownElement.textContent = timeLeft;
    }

    if (timeLeft === 0) {
      clearInterval(timerInterval);
      countdownElement.textContent = "Stop!";
      countdownElement.classList.add("stop"); // css red line
    }
  }, 1000);
});
