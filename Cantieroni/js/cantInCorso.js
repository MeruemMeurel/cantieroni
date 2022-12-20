const prev = document.getElementById('next');
const next = document.getElementById('previous');

prev.onclick = () => {
    document.getElementById('lista').scrollLeft += 1200;
};

next.onclick = () => {
    document.getElementById('lista').scrollLeft -= 1200;
};