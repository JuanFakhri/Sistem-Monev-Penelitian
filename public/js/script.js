$(document).on('click','#btn-edit',function (){
    $('.modal-body #id-siswa').val($(this).data('id'));
    $('.modal-body #nisn').val($(this).data('nisn'));
    $('.modal-body #nama').val($(this).data('nama'));
})