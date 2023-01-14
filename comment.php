
<div class="container-fluid mb-5">
    <div class="row d-flex ">
        <div class="col-md-12 col-lg-12 ">
            <div class="card border bg-grey  rounded-4">
                <div class="card-body p-4">
                    <h3 data-i18n="addComments">Add Comment</h3>
                    <div class="input-row">
                        <textarea class="form-control rounded-3" id="mainComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                        <button style="float:right" class="btn-primary btn btn-sm" onclick="isReply = false;" id="addComment" data-i18n="addComments">Add Comment</button>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2><span><?php echo $numComments ?></span> <b id="numComments" data-i18n="comments"> Comments</b></h2>
                        <div class="card mb-4 rounded-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row ">
                                        <div class="userComments"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row replyRow" style="display:none">
                    <div class="col-md-12">
                        <textarea class="form-control rounded-3" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                        <button style="float:right" class="btn-primary btn btn-sm mx-2" onclick="isReply = true;" id="addReply" data-i18n="addReply">Add Reply</button>
                        <button style="float:right" class="btn-secondary btn btn-sm" onclick="$('.replyRow').hide();"data-i18n="close">Close</button>
                    </div>
                </div>
            </div>
        </div>
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