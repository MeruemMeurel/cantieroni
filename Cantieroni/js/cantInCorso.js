const prev = document.getElementById('next');

prev.onclick = () => {
    document.getElementById('lista').scrollLeft += 1200;
};

const next = document.getElementById('previous');

next.onclick = () => {
    document.getElementById('lista').scrollLeft -= 1200;
};