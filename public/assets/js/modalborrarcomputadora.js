$('#borrarcompumodal').on('show.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('¿ Desea eliminar el registro de la computadora # ' + recipient + ' '+'?')
    modal.find('.modal-body input').val(recipient)
})
