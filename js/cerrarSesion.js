function confirmarSalir () {
    let respuesta = confirm("¿Está seguro de que desea cerrar sesión?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
} 