
  $(document).ready(function () {  

    $('#start_date').datepicker({
     autoclose: true,
     format: 'yyyy-mm-dd',
     todayHighlight: true
   })
  });

  /*Follow / UnFollow*/

  
 var following_id = $('#following_id').val();
 var follower_id = $('#follower_id').val();

 $( "#user_follow" ).click(function() {

  $.ajax
  ({ 
    url: 'user_follow',
    type: 'get',
    data: {
      following_id:following_id,
      follower_id:follower_id,
    }
  })
  .done(function(result)
  {
    var data = result;

    var follower_count = data.follower_count;
    var follow_status = data.follow_status;

    if(follow_status == "follow"){
      var follow = "Unfollow";
    }else{
      var follow = "Follow";
    }
    $('#user_follow').empty();
    $('.channel_description').empty();
    $( "#user_follow" ).append( follow );
    $( ".channel_description" ).append( follower_count + ' Followers' );



  })
  .fail(function(jqXHR, ajaxOptions, thrownError)
  {
   alert('server not responding...');
 });
});
