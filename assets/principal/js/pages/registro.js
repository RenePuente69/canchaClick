const frm = document.querySelector('#formulario');
const terminos = document.querySelector('#chb1');
document.addEventListener('DOMContentLoaded', function(){
    frm.addEventListener('submit', function(e){
        e.preventDefault();
        if (frm.nombre.value == '' || frm.apellido.value == '' 
        || frm.usuario.value == '' || frm.correo.value == ''
        || frm.clave.value == '' || frm.confirmar.value == '') {
            alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');
        }else if(!terminos.checked){
            alertaSW('ACEPTAR LOS TERMINOS Y CONDICIONES', 'warning');
        } else {
            if (frm.clave.value == frm.confirmar.value) {
                const http = new XMLHttpRequest();
                const url = base_url + 'registro/crear';
                http.open("POST", url, true);
                http.send(new FormData(frm));            
                http.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText); 
                    const res =  JSON.parse(this.responseText);
                    alertaSW(res.msg, res.tipo);
                    if (res.tipo = 'success') {
                        frm.reset();
                    } 
                }  
            };
            } else {
                alertaSW('LAS CONTRASEÑAS NO COINCIDEN', 'warning');
            }   
        }
    });
});