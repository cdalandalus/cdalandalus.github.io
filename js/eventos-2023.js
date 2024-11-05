document.addEventListener("DOMContentLoaded", function() {
    // Selecciona el elemento donde quieres insertar el fragmento de HTML
    var contenedor = document.getElementById("eventos-2023");

    // Carga el contenido del archivo fragmento.html
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Inserta el contenido dentro del elemento contenedor
            contenedor.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../include/eventos-2023.html", true);
    xhttp.send();
});
