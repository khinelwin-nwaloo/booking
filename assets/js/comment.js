/*One Time Click for View*/
document.addEventListener("DOMContentLoaded", init, false);
var a = 0; /*for view count*/
function init() {
	var _video = document.getElementById("video");

	_video.addEventListener("playing", play_clicked, false);	

}

function play_clicked() {
	/*Click Play video button to wait 1 seconds, then call ajax and store video play view count.*/
	setTimeout(function(){ 
		if(a == 0){
			var video_id = $('#v_id').val();
			var user_id = $('#u_id').val();
			if(video_id) {
				$.ajax({
					method:'get',
					url: "video_play",
					dataType : 'json',
					data :{
						video_id : video_id,
						user_id : user_id,
					}
				})
					.done(function(result)
					{
						var view = result+" views";	
						$('#view').html(view);

					})
					.fail(function(jqXHR, ajaxOptions, thrownError)
					{
						alert('server not responding...');
					});
			}
			a = 1;
		}	
	}, 1000);

}