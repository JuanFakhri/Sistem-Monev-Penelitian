$(document).on('click','#btn-panel',function (){
    $('.modal-body #id-penel').val($(this).data('id'));
    $('.modal-body #ubah_tahun').val($(this).data('tahun'));
    $('.modal-body #ubah_judulpenelitian').val($(this).data('judulpenelitian'));
    $('.modal-body #ubah_namahasiswa').val($(this).data('namamahasiswa'));
    $('.modal-body #ubah_namadosen').val($(this).data('namadosen'));
})