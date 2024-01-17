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
    //if checkbox being checked will be true
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
                // alert($(".cleaning_task").length);
                onClickChangeColor();
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: " + status + ", " + error);
            }
        });
        // if the checkbox has been checked will be false
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
                    onClickChangeColor();
                },
                error: function(xhr, status, error) {
                    console.error("Error occurred: " + status + ", " + error);
                }
            });
        }

}

function onClickChangeColor() {
    var rowCount = $(".cleaning_task:checked").length;
    var vct_cleaning_progress_percentage = $('#vct_cleaning_progress_percentage p');
    var vct_cleaning_progress_bar1 = $('#vct_cleaning_progress_bar1');
    var vct_cleaning_progress_bar2 = $('#vct_cleaning_progress_bar2');
    var vct_cleaning_progress_bar3 = $('#vct_cleaning_progress_bar3');
    var cleaning_label = $('.cleaning_label');

    if (rowCount >= 3) {
        vct_cleaning_progress_percentage.text('100%');
        vct_cleaning_progress_percentage.css('color', '#448A47');
        cleaning_label.text('Completed');
        cleaning_label.css('color', '#448A47');

        vct_cleaning_progress_bar1.css({
            'background-color': '#448A47',
            'border': ''
        });
        vct_cleaning_progress_bar2.css({
            'background-color': '#448A47',
            'border': ''
        });
        vct_cleaning_progress_bar3.css({
            'background-color': '#448A47',
            'border': ''
        });
    } else if (rowCount >= 2) {
        vct_cleaning_progress_percentage.text('60%');
        vct_cleaning_progress_percentage.css('color', '#F4BB4B');
        cleaning_label.text('Cleaning');
        cleaning_label.css('color', '#F4BB4B');
        vct_cleaning_progress_bar1.css({
            'background-color': '#F4BB4B',
            'border': ''
        });
        vct_cleaning_progress_bar2.css({
            'background-color': '#F4BB4B',
            'border': ''
        });
        vct_cleaning_progress_bar3.css({
            'background-color': '',
            'border': ''
        });
    } else if (rowCount >= 1) {
        vct_cleaning_progress_percentage.text('30%');
        vct_cleaning_progress_percentage.css('color', '#F4BB4B');
        cleaning_label.text('Cleaning');
        cleaning_label.css('color', '#F4BB4B');
        vct_cleaning_progress_bar1.css({
            'background-color': '#F4BB4B',
            'border': ''
        });
        vct_cleaning_progress_bar2.css({
            'background-color': '',
            'border': ''
        });
        vct_cleaning_progress_bar3.css({
            'background-color': '',
            'border': ''
        });
    } else if (rowCount >= 0) {
        vct_cleaning_progress_percentage.text('0%');
        vct_cleaning_progress_percentage.css('color', '#981E1E');
        cleaning_label.text('Not Cleaned');
        cleaning_label.css('color', '#981E1E');
        vct_cleaning_progress_bar1.css({
            'background-color': '',
            'border': '1px solid #981E1E',
            'border-right':'none',
            'border-radius': '16px 0 0 16px'
        });
        vct_cleaning_progress_bar2.css({
            'background-color': '',
            'border': '1px solid #981E1E',
            'border-right':'none',
            'border-left':'none'
        });
        vct_cleaning_progress_bar3.css({
            'background-color': '',
            'border': '1px solid #981E1E',
            'border-radius': '0 16px 16px 0',
            'border-left':'none'
        });
    }
}
