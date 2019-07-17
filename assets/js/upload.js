
function ValidateFileUpload() {
    $('#previewimage').empty();
    var fuData = document.getElementById('video_image');
    var FileUploadPath = fuData.value;

    var Extension = FileUploadPath.substring(
        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

        //The file uploaded is an image
        if (Extension == "gif" || Extension == "png" || Extension == "bmp"
            || Extension == "jpeg" || Extension == "jpg") {
        // To Display
    if (fuData.files && fuData.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewimage').append('<img src="" id="videoimage" width="250px" height="auto"><br><br>');
            $('#videoimage').attr('src', e.target.result);
        }
        reader.readAsDataURL(fuData.files[0]);
    }

} else {
                        //The file upload is NOT an image
                        $("#video_image").val('');
                        alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                    }
                }

                $(document).ready(function(){

                    $("#video_image").on("change", function(){
                        var files = $(this)[0].files;
                        if(files.length = 1){
                            $("#label_image").text(" Image is ready to upload");
                        }
                        else {

                        }
                    });
                });


                function ValidateFileUpload_Video() {
                    var fuData = document.getElementById('poster');
                    var FileUploadPath = fuData.value;

                    var Extension = FileUploadPath.substring(
                        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();


        //The file uploaded is an image
        if (Extension == "mp4" || Extension == "avi" || Extension == "flv"
            || Extension == "wmv" || Extension == "mov") {
        // To Display


} else {
                        //The file upload is NOT an image
                        $("#poster").val('');
                        alert("Videos only allows file types of AVI, FLV, WMV, MP4, and MOV. ");
                    }
                }

                $(document).on("change", ".file_multi_video", function(evt) {
                  var $source = $('#previewvideo');
                  $source[0].src = URL.createObjectURL(this.files[0]);
                  $source.parent()[0].load();
              });

                $(document).ready(function(){

                    $("#poster").on("change", function(){
                        var files = $(this)[0].files;
                        if(files.length = 1){
                            $("#label_span").text(" Video is ready to upload");
                            $('#hideshow').show();
                        }
                        else {

                        }
                    });
                });