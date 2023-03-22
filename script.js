const  modalContainer = document.getElementById("modalContainer")
function cancelarEliminar(){
    modalContainer.classList.remove("showModal");
    modalContainer.classList.add("hideModal");
}

function showModal(id){
    modalContainer.classList.add("showModal")
    modalContainer.classList.remove("hideModal");
    const aceptarEliminar = document.getElementById("aceptarEliminar");
    aceptarEliminar.href = `./eliminarProveedor.php?id=${id}`;
}