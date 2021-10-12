function Success(){
    var nombre = document.getElementById("nombre");
    var mail = document.getElementById("mail");
    var consulta = document.getElementById("consulta");

    if(nombre != "" && mail != "" && consulta != ""){
        alert("Consulta enviada correctamente");
    }
}