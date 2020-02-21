function actions__t(type, el, id, type_) {
    $.ajax({
        url: '../ajax/controlling_t.php',
        type: 'post',
        data: {
            'type': type,
            'id': id,
            'type_': type_,
        },
        success: function (d) {
            window.location.reload();

        }
    })
}

function group__add(type, email_person) {
    $.ajax({
        url: '../ajax/group__add.php',
        type: 'post',
        data: {
            'type': type,
            'email_person': email_person,
        },
        success: function (d) {
            console.log(d);

            window.location.reload();

        }
    })
}