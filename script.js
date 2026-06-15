const formulario= document.getElementById("form");

function Validar_input(){
    const inputu_usuario = document.getElementById("login_input_usuario");
        const usuario= inputu_usuario.value;
        
    const inputu_contraseña = document.getElementById("login_input_contraseña");
        const contraseña =inputu_contraseña.value;
    
    const obligatorio = document.querySelector(".requerido");
        const obligatorioContra = document.querySelector(".requerido-contra");

    if (usuario == ""){
            obligatorio.style.display="block";
                inputu_usuario.focus();
            
                inputu_usuario.addEventListener("input", function(){
                    if(inputu_usuario !== ""){
                        obligatorio.style.display="none";
                    }
                })
    return false;
    }if (contraseña ==""){
            obligatorioContra.style.display="block";    
                inputu_contraseña.focus();
                
                inputu_contraseña.addEventListener("input", function(){
                    if(inputu_contraseña !== ""){
                        obligatorioContra.style.display="none";
                    }
                })
    return false;
    }

//     if(usuario !== "Direccion"){
//         alert("Nombre de Usuario Incorrecto");
//             inputu_usuario.focus();
//         return false;
//     }if(contraseña !== "291717"){
//         alert("contraseña Incorrecta");
//             inputu_contraseña.focus();
//         return false;
//     }
}