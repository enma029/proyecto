const Modal= document.querySelectorAll(".Modal-box");
const abriEditar= document.querySelectorAll(".editar");
const abriRegistrar= document.getElementById("Registrar-boton");
const cancelar= document.querySelectorAll(".Cancelar");
const borrar = document.querySelectorAll(".borrar-a");
const inputId = document.getElementById('id-editar');

// Editar
document.querySelectorAll(".editar-a").forEach(function (boton) {
    boton.addEventListener("click", function (e) {
        e.preventDefault(); 

        const idUsuario = this.getAttribute('data-id');
        const nombre = this.getAttribute('data-nombre');
        const contraseña = this.getAttribute('data-contra');

        document.getElementById('id-editar').value = idUsuario;
        document.getElementById('nombre-nuevo').value = nombre;
        document.getElementById('contra-nueva').value = contraseña;

        const modalBox = document.querySelectorAll(".Modal-box")[0];
        if (modalBox) {
            modalBox.classList.remove("Modal-box-desactivado");
        }
    });
});

const formularioEditar = document.querySelector(".Modal-editar form");
if (formularioEditar) {
    formularioEditar.addEventListener("submit", function (event) {
        const nombre = document.getElementById("nombre-nuevo").value.trim();
        const contra = document.getElementById("contra-nueva").value.trim();
        
        if (nombre === "") {
            event.preventDefault();
            alert("Ingresar el nombre del departamento");
            return;
        }
        if (contra === "") {
            event.preventDefault();
            alert("Por favor, rellena el campo de contraseña.");
            return;
        }
});
}
// Registrar
// abriRegistrar.addEventListener("click", function(event){
//     event.preventDefault();
//     if(Modal[1]){
//         Modal[1].classList.remove("Registrar-desactivar");
//     }
// });




cancelar.forEach(function(boton) {
    boton.addEventListener("click", function(salir){
        salir.preventDefault();

        const modalPadre = this.closest(".Modal-box");
        
        if(modalPadre) {
            if (modalPadre === Modal[1]) {
                modalPadre.classList.add("Registrar-desactivar");
            } else {
                modalPadre.classList.add("Modal-box-desactivado");
            }
        };
    });
});

// // BORRAr
//     borrar.forEach(function(boton){
//     boton.addEventListener("click", function(eliminar){
//         eliminar.preventDefault();
//         const respuesta= confirm("¿Deseas eliminar este usuario?"); 

//         if (respuesta) {
//         const fila=this.closest("tr");
//         fila.remove();
//             alert("Usuario eliminado");
        
        
//     }
// });
// });

// Verificacion del registrar
const modal_registrar= document.querySelector(".Registrar-modal form")
const Contraseña_1= document.getElementById("Contraseña-1");
const Contraseña_2= document.getElementById("Contraseña-2");
const nombre= document.getElementById("Nombre-registrar");

if(modal_registrar){
    modal_registrar.addEventListener("submit", function(event){
        event.preventDefault();

        const nombre_value= nombre.value.trim();
        const valor_1= Contraseña_1.value;
        const valor_2= Contraseña_2.value;

            if(nombre_value ===""){
                alert("Ingresar el nombre del departamento");
                return;
            }
            
            // if (valor_1 === "" || valor_2 === "") {
            //     alert("Por favor, rellena ambos campos de contraseña.");
            //     return;
            // } else if(valor_1 !== valor_2){
            //     alert("Las contraseñas no coinciden inténtalo de nuevo");
            //     return;
            // }
            this.submit();
    });
    }