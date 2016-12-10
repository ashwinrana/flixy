$('.like').on('click',function(event){
    event.preventDefult();
    postID = event.target.parentmode.parentNode.dataset['postId'];
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data:{isLike: isLike, postId: postID, _token: token}
    })
        .done(function () {
           //Change to Page
        });
// console.log(event);
});