<?php
 include ("control/Controller.php");
  if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])) {
    header('Location:home.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafeWorld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="COP27" name="keywords">
    <meta content="Sharm El-Sheikh Climate Change Conference - November 2022" name="description">
    <link href="img/0-icon.png" rel="icon">
    <!--Style CSS-->
    <link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <!-- Fonts -->
    <link href="lib/font/Jost-font.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

</head>

<body dir="ltr">
    <!--Start Secion navbar----------------------------------------------------------->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 shadow-sm">
        <a href="home.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Safe<span class="text-secondary">World</span></h1>
        </a>
        <select class="btn btn-sm h-25  mx-2 hover">
            <option value="en" data-i18n="english" selected>English</option>
            <option value="ar" data-i18n="arabic">Arabic</option>
        </select>
    </nav>
    <!-- End Secion navbar-->
<div class="content-login">
    <img src="img/0-icon.png">  
        <div class="filed-login space">
            <input id="userName" type="text"  placeholder="Your Name">
        </div>
        <div class="filed-login space">
            <input type="text" id="userEmail" type="email"  placeholder="Your Email">            
        </div>
        <div class="filed-login space">
            <span class="show-login">show</span>
            <input id="userPassword" class="pass-key" type="password" placeholder="password">
        </div>
        <div class="field1">
            <button class="btn btn-sm mt-3 w-25 btn-primary" type="submit" name="submit" id="registerBtn">Register</button>
        </div>      
</div>




<!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/ajax/ajax.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/main-slid/cocoen.js"></script>
    <script>
        Cocoen.parse(document.body);
    </script>
    <!--Javascript -->
    <script src="js/main.js"></script>
    <!-- trans code -->
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/login.js" ></script> 

    <script type="text/javascript">
        

        var isReply = false, commentID = 0, max = <?php echo $numComments ?>;

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
                        commentID: commentID
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
                alert('Please Check Your Inputs');
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
                            alert('Please insert valid email address!');
                        else if (response === 'failedUserExists')
                            alert('User with this email already exists!');
                        else
                            window.location = window.location;
                    }
                });
            } else
                alert('Please Check Your Inputs');
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
                            alert('Please check your login details!');
                        else
                            window.location = window.location;
                    }
                });
            } else
                alert('Please Check Your Inputs');
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
</script>

</body>
</html>