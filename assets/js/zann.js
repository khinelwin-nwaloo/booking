
/*Date Picker*/
$('#start_date').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighlight: true
})
$('#end_date').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighlight: true
})
$('#start_date_edit').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighlight: true
})
$('#end_date_edit').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighlight: true
})

// $('#profile-feed-1').ace_scroll({
//   height: '1000px',
//   mouseWheelLock: true,
//   alwaysVisible: true
// });

$(document).ready(function () {
  setTimeout(function () {
    $('#successMessage').fadeOut('slow');
  }, 10000);
});

function readVideo(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#video')
              .attr('src', e.target.result)
              .width(200)
              .height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }

}

function readBanner(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#banner')
              .attr('src', e.target.result)
              .width(220)
              .height(200);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
function readImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#image')
              .attr('src', e.target.result)
              .width(150)
              .height(150);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
/*Delete Modal*/
$('#confirmDelete').on('show.bs.modal', function (e) {
  $message = $(e.relatedTarget).attr('data-message');
  $(this).find('.modal-body p').text($message);
  $title = $(e.relatedTarget).attr('data-title');
  $(this).find('.modal-title').text($title);

  var form = $(e.relatedTarget).closest('form');
  $(this).find('.modal-footer #confirm').data('form', form);
});

$('#confirmDelete').find('.modal-footer #confirm').on('click', function () {
  $(this).data('form').submit();
});


//initiate dataTables plugin
$(document).ready(function () {
  $('#dynamic-table').DataTable();
});


if (!ace.vars['touch']) {
  $('.chosen-select').chosen({allow_single_deselect: true});
  //resize the chosen on window resize

  $(window)
          .off('resize.chosen')
          .on('resize.chosen', function () {
            $('.chosen-select').each(function () {
              var $this = $(this);
              $this.next().css({'width': $this.parent().width()});
            })
          }).trigger('resize.chosen');
  //resize chosen on sidebar collapse/expand
  $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
    if (event_name != 'sidebar_collapsed')
      return;
    $('.chosen-select').each(function () {
      var $this = $(this);
      $this.next().css({'width': $this.parent().width()});
    })
  });

}

$(document).ready(function(){
  
  $('.replycomment').hide();
  $('#hide_reply').hide();
});

$("#view_reply").click(function () {
  
   $('.replycomment').show();
   $('#view_reply').hide();
   $('#hide_reply').show();
//  $(".replycomment").css("display", "block");
//  $("#view_reply").css("display", "none");
//  $("#hide_reply").css("display", "block");

});
$("#hide_reply").click(function () {
  
   $('.replycomment').hide();
   $('#view_reply').show();
   $('#hide_reply').hide();


});

//$("#hide_reply").click(function () {
//  $(".replycomment").css("display", "none");
//  $("#view_reply").css("display", "block");
//  $("#hide_reply").css("display", "none");
//
//});

// 
// $( "#end_date" ).click(function() {
//    var start_date = $('input[name="start_date"]').val();
//    if(!start_date){
//      alert("Please Choose Start Date");
//    }
// });

