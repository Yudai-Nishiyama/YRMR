// function handleCheckboxClick(taskId, isChecked) {
//     // Ajaxを使用してデータをサーバーに送信
//     console.log('Checkbox with id ' + taskId + ' is checked: ' + isChecked);
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'http://localhost/phpmyadmin/index.php?route=/sql&db=15batch&table=reservation_task&pos=0', true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             console.log(xhr.responseText); // サーバーからの応答をコンソールに表示
//         }
//     };

//     var formData = new FormData();
//     formData.append('task_id', taskId);
//     formData.append('is_checked', isChecked);

//     xhr.send(formData);
// }

function handleCheckboxClick(taskId, isChecked,reservation_id) {
    // Logging the status
    console.log('Checkbox with id ' + taskId + ' is checked: ' + isChecked);
    //header is needed to receive the csrf and other payload
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Using jQuery's AJAX method
    if(isChecked){
        $.ajax({
            //url is the link to the server, in this case the url will be the backend code of php,
            //because php is the one which connected to the database.
            //get value through javascript, send it the php, from php it will send to database.
            url: '/cleaner/cleaner_page/post/'+ reservation_id,
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            data: {
                task_id: taskId,
                is_checked: isChecked
            },
            success: function(response) {
                console.log(response); // Displaying the server response in the console
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: " + status + ", " + error);
            }
        });
        }else{
            $.ajax({
                url: '/cleaner/cleaner_page/delete/'+ reservation_id,
                type: 'DELETE',
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    task_id: taskId,
                    is_checked: isChecked
                },
                success: function(response) {
                    console.log(response); // Displaying the server response in the console
                },
                error: function(xhr, status, error) {
                    console.error("Error occurred: " + status + ", " + error);
                }
            });
        }

}