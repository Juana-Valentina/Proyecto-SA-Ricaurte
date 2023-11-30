document.getElementById("boton").onclick= () => {
    generarCalendario(document.getElementById("Meses").value.split("-"));
}
function generarCalendario(fecha) {
document.getElementsByClassName("Calendario")[0].innerHTML = " ";
let elemento, casilla = " ";
let p = " ";
let Calendario = document.getElementsByClassName("Calendario")[0];
if (fecha[0] == "") {
    alert("seleccione una fecha");} 
    else {
        let diasM = new Date(fecha[0], fecha[1], 0).getDate();
        for (let index = 0; index < diasM; index++) {
            elemento = document.createElement("div");
            elemento.id = "d" + (index + 1);
            elemento.className = "casilla";
            p = document.createElement("p");
            p.className = "pp";
            p.innerHTML = (index +1);
            elemento.appendChild(p);
            casilla = Calendario.appendChild(elemento);
        }
    }
}
