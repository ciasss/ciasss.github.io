var element = document.body;

function ubahMode(){
    alert('Tema Sudah Terganti')
    element.classList.toggle("dark");
}
const button = document.getElementById('btn-about');
button.addEventListener("click", function showInfo() {
    const x = document.getElementById('info-about');
    if (x.style.display == 'none'){
        x.style.display = 'block';
    }else{
        x.style.display == 'none';
    }
})