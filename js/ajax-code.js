$(document).ready(function () {
    $("#addComment, #addReply").on('click', function () {
        var comment;
        if (!isReply)
            comment = $("#mainComment").val();
        else
            comment = $("#replyComment").val();

        if (comment.length > 5) {
            $.ajax({
                    url: 'index.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    addComment: 1,
                    comment: comment,
                    isReply: isReply,
                    commentID: commentID,
                    name:name
                }, success: function (response) {
                    max++;
                    $("#numComments").text(max + " Comments");

                    if (!isReply) {
                        $(".userComments").prepend(response);
                        $("#mainComment").val("");
                    } else {
                        commentID = 0;
                        $("#replyComment").val("");
                        $(".replyRow").hide();
                        $('.replyRow').parent().next().append(response);
                    }
                }
            });
        } else
            alert('Please Check Your Inputs => يرجى التحقق من المدخلات الخاصة بك');
    });

    $("#registerBtn").on('click', function () {
        var name = $("#userName").val();
        var email = $("#userEmail").val();
        var password = $("#userPassword").val();

        if (name != "" && email != "" && password != "") {
            $.ajax({
                url: 'index.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    register: 1,
                    name: name,
                    email: email,
                    password: password
                }, success: function (response) {
                    if (response === 'failedEmail')
                        alert('Please insert valid email address! => الرجاء إدخال عنوان بريد إلكتروني صالح!');
                    else if (response === 'failedUserExists')
                        alert('User with this email already exists! => المستخدم مع هذا البريد الإلكتروني موجود بالفعل!');
                    else
                        window.location = window.location;
                }
            });
        } else
            alert('Please Check Your Inputs => يرجى التحقق من المدخلات الخاصة بك');
    });

    $("#loginBtn").on('click', function () {
        var email = $("#userLEmail").val();
        var password = $("#userLPassword").val();

        if (email != "" && password != "") {
            $.ajax({
                url: 'index.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    logIn: 1,
                    email: email,
                    password: password
                }, success: function (response) {
                    if (response === 'failed')
                        alert('Please check your login details! => يرجى التحقق من تفاصيل تسجيل الدخول الخاصة بك!');
                    else
                        window.location = window.location;
                }
            });
        } else
            alert('Please Check Your Inputs => يرجى التحقق من المدخلات الخاصة بك');
    });

    getAllComments(0, max);
    });

    function reply(caller) {
    commentID = $(caller).attr('data-commentID');
    $(".replyRow").insertAfter($(caller));
    $('.replyRow').show();
    }

    function getAllComments(start, max) {
    if (start > max) {
        return;
    }

    $.ajax({
        url: 'index.php',
        method: 'POST',
        dataType: 'text',
        data: {
            getAllComments: 1,
            start: start
        }, success: function (response) {
            $(".userComments").append(response);
            getAllComments((start+20), max);
        }
    });
}