function submitForm() {
    var formData = $('#sig').serialize();
    $.ajax({
        type: 'POST',
        url: '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>',
        data: formData,
        dataType: 'html',
        success: function(response) {
            $('#contenedor').html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

$('#btnLogin').click(function () {
    $('#contenedor').load('login.php');
});
