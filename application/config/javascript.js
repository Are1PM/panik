// sweetalert untuk menghapus
jQuery(document).ready(function($){
  $('.delete-link').on('click',function(){
      var getLink = $(this).attr('href');
      swal({
              title: '',
              text: 'Hapus Data?',
              html: true,
              confirmButtonColor: '#d9534f',
              showCancelButton: true,
              },function(){
              window.location.href = getLink
          });
      return false;
  });
});