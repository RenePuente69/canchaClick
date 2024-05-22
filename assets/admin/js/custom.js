function cerrarSesion(){
    Swal.fire({
        title: "Cerrar Sesión",
        text: "¿Estas seguro que deseas salir?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, salir!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = base_url + 'dashboard/salir'
        }
      });
}