window.addEventListener('load', function() {
    const divs = document.querySelectorAll('.random-div');
    setTimeout(() => {
        let i = 0;
        const showDIV = setInterval(function() {
            divs[i].style.opacity = 2;
            divs[i].style.transform = 'translateY(0)';
            i++;
            if (i === divs.length) {
                clearIterval(showDIV);
            }
        }, 3000);
    }, 0);
});
/*window.addEventListener('load', () => {
const divs = document.querySelectorAll('.random-div');
for (let div of divs) {
    setTimeout(() => {
        const random = Math.floor(Math.random() * divs.length);
        divs[random].style.display = 'inline-block';
    }, div * 3000);
}
});*/