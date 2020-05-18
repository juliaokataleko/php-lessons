<?php

include 'db.php';
global $method;
$method = $_SERVER["REQUEST_METHOD"];

function savePost()
{
    global $method;
    global $pdo;

    if($method == "POST"):

        $title = $_POST['title'];
        $body = nl2br($_POST['body']);

        $sql = $pdo->prepare("INSERT INTO posts(author, title, body) VALUES(?,?,?)");

        if($sql->execute(["1", $title, $body])) {
            echo 1;
        } else {
            echo 0;
        }

    endif;

}

function loadPosts() {

    global $method;
    global $pdo;
    if($method == "GET"):
    $sql = $pdo->query("select * from posts order by id desc LIMIT 4");

    $array = [];
    
    if($sql->rowCount() > 0) {
        $posts = $sql->fetchAll();
    
        foreach ($posts as $key => $post) {
            $array[] = $post;
        }
    
        print json_encode($array);
    
    } else {
        echo "Sem dados";
    }

    endif;

}

savePost();
loadPosts();



