function abrirModal1(){
    const modal = document.getElementById('janela-modal-formulario')
    modal.classList.add('abrir')    

    modal.addEventListener("click",(e) => {
        if(e.target.id == 'fechar' || e.target.id == 'janela-modal-formulario'){
            modal.classList.remove('abrir')
        }
    })
}
function abrirModal2(){
    const modal = document.getElementById('janela-modal-lista')
    modal.classList.add('abrir')

    modal.addEventListener("click",(e) => {
        if(e.target.id == 'fechar' || e.target.id == 'janela-modal-lista'){
            modal.classList.remove('abrir')
        }
    })
}