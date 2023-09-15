const day = document.getElementById('days');
const hour = document.getElementById('hours');
const minute = document.getElementById('minutes');
const second = document.getElementById('seconds');
const newyear = "8 sep 2023";

function countdown() {
    const newyeardate = new Date(newyear);
    const currentdate = new Date();
    const tseconds = (newyeardate - currentdate) / 1000;
    const days = Math.floor(tseconds / 3600 / 24);
    const hours = Math.floor(tseconds / 3600) % 24;
    const minutes = Math.floor(tseconds / 60) % 60;
    const seconds = Math.floor(tseconds) % 60;
    console.log(days, hours, minutes, seconds);
    day.innerHTML = days;
    hour.innerHTML = hours;
    minute.innerHTML = minutes;
    second.innerHTML = seconds;
}

function formatTime(time) {
    return time < 10 ? ('0${time}') : time;
}
countdown();
setInterval(countdown, 1000);
formatTime();