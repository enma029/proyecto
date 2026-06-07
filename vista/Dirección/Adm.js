const Modal= document.querySelectorAll(".Modal-box");
const abriEditar= document.getElementById("editar");
const abriRegistrar= document.getElementById("Registrar-boton");
const cancelar= document.querySelectorAll(".Cancelar");
const borrar = document.getElementById("borrar");

// Editar
abriEditar.addEventListener("click", function(event){
    event.preventDefault();
    if(Modal[0]){
    Modal[0].classList.remove("Modal-box-desactivado");
    }
});

// Registrar
abriRegistrar.addEventListener("click", function(event){
    event.preventDefault();
    if(Modal[1]){
        Modal[1].classList.remove("Registrar-desactivar");
    }
});

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

// BORRAr
borrar.addEventListener("click", function(eliminar){
    eliminar.preventDefault();
    const respuesta= confirm("¿Deseas eliminar este usuario?"); 
    
    if (respuesta) {
            alert("Usuario eliminado");
        } else {
            
            alert("Acción cancelada");
        }
});

// Verificacion del registrar
const modal_registrar= document.querySelector(".Registrar-modal form")
const Contraseña_1= document.getElementById("Contraseña-1");
const Contraseña_2= document.getElementById("Contraseña-2");
const nombre= document.getElementById("Nombre-registrar");

if(modal_registrar){
    modal_registrar.addEventListener("submit", function(event){
        event.preventDefault();

        const nombre_value= nombre.value;
        const valor_1= Contraseña_1.value;
        const valor_2= Contraseña_2.value;

            if(nombre_value ===""){
                alert("Ingresar el nombre del departamento");
            }
            if (valor_1 === "" || valor_2 === "") {
                alert("Por favor, rellena ambos campos de contraseña.");
            } else if (valor_1 === valor_2) {
                alert("Contraseñas correctas Guardando departamento");

                modal_registrar.reset();
        
            } else {
                alert("Las contraseñas no coinciden inténtalo de nuevo");
            }
    });
    }