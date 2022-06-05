
$('.btn').click(function (e) {
    e.preventDefault();

    let receive = $.trim( $('.receive').val());
    let send=  $.trim( $('.send').val());

    if (receive === '' || send=== '') {
        let error_1 = document.createElement('div');
        error_1.className = 'notification mt-4 mb-4  is-warning'
        textnode = document.createTextNode('Please fill up all input');
        error_1.append(textnode)

        let first_error = document.querySelector('.frist');
        let second_error = document.querySelector('.second');
        first_error.insertBefore(error_1, second_error)
        setTimeout(() => {
            error_1.remove()
        },4000)
    } else {
        $.ajax({
            method:'POST',
            url:'http://localhost/WALLET/Backend/transfer.php',
            data:{
                receive:receive,
                send:send
            },
            success: function (data) {
                let complete = $('.complete')
               complete.html(data)
            },
            datetype:'string'

        })
    }
})