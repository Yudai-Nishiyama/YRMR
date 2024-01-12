function handleCheckboxClick(taskId, isChecked) {
    // Ajaxを使用してデータをサーバーに送信
    console.log('Checkbox with id ' + taskId + ' is checked: ' + isChecked);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/phpmyadmin/index.php?route=/sql&db=15batch&table=reservation_task&pos=0', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText); // サーバーからの応答をコンソールに表示
        }
    };

    var formData = new FormData();
    formData.append('task_id', taskId);
    formData.append('is_checked', isChecked);

    xhr.send(formData);
}