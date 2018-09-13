$('.img-remove').on('click', function() {
    if (confirm($(this).data('confirm'))) {
        deleteImage($(this).attr('image-id'));
    }  
});
function deleteImage(imageId) {
    document.getElementById("remove-" + imageId).addEventListener("click", function(){
        document.getElementById("tr-" + imageId).remove();
        $("#imageDel").val($("#imageDel").val() + imageId + " " );
    });
}
