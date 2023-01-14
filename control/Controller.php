<?php 
session_start();

$loggedIn = false;

if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])) {
    $loggedIn = true;
}
include("database/db.php");


function createCommentRow($data) {
    global $conn;

    $response = '
            <div class="comment">
                <span style="font-size: 18px;"class="user text-primary ">'.$data['name'].' :</span>
                <span class="text-info" style="font-size: 10px;">'.$data['createdOn'].'</span>
                <p class="userComment mx-5 text-gray-dark">'.$data['comment'].'</p>
                <div class="reply mb-2">
                <a style="font-size: 10px;" class="text-secondary" href="javascript:void(0)" data-commentID="'.$data['id'].'" onclick="reply(this) " data-i18n="reply">REPLY</a>
                </div>
                <div class="replies mt-2 mx-5">';

    $sql = $conn->query("SELECT replies.id, name, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d || %H:%i') AS createdOn FROM replies INNER JOIN users ON replies.userID = users.id WHERE replies.commentID = '".$data['id']."' ORDER BY replies.id LIMIT 20");
    while($dataR = $sql->fetch_assoc())
        $response .= createCommentRow($dataR);

    $response .= '
                </div>
            </div>
        ';

    return $response;
}

if (isset($_POST['getAllComments'])) {
    $start = $conn->real_escape_string($_POST['start']);

    $response = "";
    $sql = $conn->query("SELECT comments.id, name, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d || %H:%i') AS createdOn FROM comments INNER JOIN users ON comments.userID = users.id ORDER BY comments.id DESC LIMIT $start, 20");
    while($data = $sql->fetch_assoc())
        $response .= createCommentRow($data);

    exit($response);
}

if (isset($_POST['addComment'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    $isReply = $conn->real_escape_string($_POST['isReply']);
    $commentID = $conn->real_escape_string($_POST['commentID']);

    if ($isReply != 'false') {
        $conn->query("INSERT INTO replies (comment, commentID, userID, createdOn) VALUES ('$comment', '$commentID', '".$_SESSION['userID']."', NOW())");
        $sql = $conn->query("SELECT replies.id, name, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn FROM replies INNER JOIN users ON replies.userID = users.id ORDER BY replies.id DESC LIMIT 1");
    } else {
        $conn->query("INSERT INTO comments (userID, comment, createdOn) VALUES ('".$_SESSION['userID']."','$comment',NOW())");
        $sql = $conn->query("SELECT comments.id, name, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN users ON comments.userID = users.id ORDER BY comments.id DESC LIMIT 1");
    }

    $data = $sql->fetch_assoc();
    exit(createCommentRow($data));
}


if (isset($_POST['register'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = $conn->query("SELECT id FROM users WHERE email='$email'");
        if ($sql->num_rows > 0)
            exit('failedUserExists');
        else {
            $ePassword = password_hash($password, PASSWORD_BCRYPT);
            $conn->query("INSERT INTO users (name,email,password,createdOn) VALUES ('$name', '$email', '$ePassword', NOW())");

            $sql = $conn->query("SELECT id FROM users ORDER BY id DESC LIMIT 1");
            $data = $sql->fetch_assoc();

            $_SESSION['loggedIn'] = 1;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['userID'] = $data['id'];
            exit('success'); 
        }
    } else
        exit('failedEmail');
}

if (isset($_POST['logIn'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = $conn->query("SELECT id, password, name FROM users WHERE email='$email'");
        if ($sql->num_rows == 0)
            exit('failed');
        else {
            $data = $sql->fetch_assoc();
            $passwordHash = $data['password'];

            if (password_verify($password, $passwordHash)) {
                $_SESSION['loggedIn'] = 1;
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $email;
                $_SESSION['userID'] = $data['id'];

                exit('success');
            } else
                exit('failed');
        }
    } else
        exit('failed');
}

$sqlNumComments = $conn->query("SELECT id FROM comments");
$numComments = $sqlNumComments->num_rows;


?>