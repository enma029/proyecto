const salir = document.getElementById("Salir");

// Validamos: ¿Existe el elemento en esta página?
if (salir) {
    salir.addEventListener("click", function (evento) {
        evento.preventDefault();
        if (confirm("¿Está seguro de que quiere salir?")) {
            window.location.href = this.href; 
        }
    });
}