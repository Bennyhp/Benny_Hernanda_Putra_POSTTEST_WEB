
function btnHilang() {
    const y = document.getElementById('main-contents');
    const x = document.getElementById('judul-am');
    const z = document.getElementById('content-am');
    if (y.style.display == "none") {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
    } else {
        y.style.display = "none";
        x.style.display = "block";
        z.style.display = "block";
    }
}

const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', () => {
    document.body.classList.toggle('dark');
});


