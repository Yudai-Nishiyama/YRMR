
function chooseCleaner(cleanerId, reservation_id) {
    // Logging the status
    console.log('Checkbox with id ' + cleanerId);
    //header is needed to receive the csrf and other payload
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Using jQuery's AJAX method
    //if checkbox being checked will be true
    if(cleanerId == 0){
        $.ajax({
            //url is the link to the server, in this case the url will be the backend code of php,
            //because php is the one which connected to the database.
            //get value through javascript, send it the php, from php it will send to database.
            url: '/admin/cleaners/cleaning_progress_page/chooseCleaner/'+ reservation_id,
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            data: {
                cleaner_id : cleanerId,
            },
            success: function(response) {
                console.log(response); // Displaying the server response in the console
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: " + status + ", " + error);
            }
        });
        // if the checkbox has been checked will be false
        }else{
            $.ajax({
                url: '/admin/cleaners/cleaning_progress_page/changeCleaner/'+ reservation_id,
                type: 'PATCH',
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    cleaner_id : cleanerId,
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

