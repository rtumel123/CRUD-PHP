</div>
<!-- /container -->

<!-- this goes in footer.php -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- bootbox library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
// JavaScript for deleting product
$(document).on('click', '.delete-object', function(){

var id = $(this).attr('delete-id');

bootbox.confirm({
    message: "<h4>Are you sure?</h4>",
    buttons: {
        confirm: {
            label: '<span class="glyphicon glyphicon-ok"></span> Yes',
            className: 'btn-danger'
        },
        cancel: {
            label: '<span class="glyphicon glyphicon-remove"></span> No',
            className: 'btn-primary'
        }
    },
    callback: function (result) {

        if(result==true){
            $.post('delete_product.php', {
                object_id: id
            }, function(data){
                location.reload();
            }).fail(function() {
                alert('Unable to delete.');
            });
        }
    }
});

return false;
});
</script>

</body>
</html>
