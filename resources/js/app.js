require('./bootstrap');

window.taskDone = function (id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        'type': 'PATCH',
        'url': '/tasks/' + id,
        success: function (result) {
            // تسک اپدیت شده و جواب برای ما برمیگردد
            $('#done_status_' + result.id).html(result.is_done ? 'Done' : 'Not Done');
            // document.getElementById('done_status').innerHTML = result.is_done ? 'Done' : 'Not Done'
        },
        error: function (error) {
            console.error(error)
        }
    })
}

// window.taskDone = () => {
//     alert("test");
// }
