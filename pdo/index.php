<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pdo_lesson";

// Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

// Create PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PDO Query

$stmt = $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    # echo $row['title'] . '<br>';
}

/**
 * Prepared Statements (Prepare & Execute)
 */

 // Unsafe
 # $sql = "SELECT * FROM posts where author = '$author'";

 // FETCH FOR MULTIPLE POST
 $author = 0;
 $status = 1;
 $sql = "SELECT * FROM posts WHERE author > :author and status = :status";
 $stmt = $pdo->prepare($sql);
 $stmt->execute(['author' => $author, 'status' => $status]);
 $posts = $stmt->fetchAll();

 foreach ($posts as $key => $post) {
    // echo "<h2>" . $post->title . '</h2>';
    // echo $post->body . '<hr>';
}

echo "<hr>";

// fecth single post
$id = 3;
$sql = "SELECT * FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

?>
<h1><?=$post->title;?></h1>
<p><?=$post->body;?></p>

<?php

# row count
$author = 1;
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();

// echo "Quantidade de Posts: " . $postCount;

// inserting data
$title = "Onde posso arranjar algum?";
$body = "Existem muitas variações das passagens do Lorem Ipsum disponíveis, mas a maior parte sofreu alterações de alguma forma, pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis. Se vai usar uma passagem do Lorem Ipsum, deve ter a certeza que não contém nada de embaraçoso escondido no meio do texto. Todos os geradores de Lorem Ipsum na Internet acabam por repetir porções de texto pré-definido, como necessário, fazendo com que este seja o primeiro verdadeiro gerador na Internet. Usa um dicionário de 200 palavras em Latim, combinado com uma dúzia de modelos de frases, para gerar Lorem Ipsum que pareçam razoáveis. Desta forma, o 
    Lorem Ipsum gerado é sempre livre de repetição, ou 
    de injecção humorística, etc.";
$author = 1;

// $sql = "INSERT INTO posts(title, body, author) VALUES (:title, :body, :author)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo "Dados inseridos";

// update data
$title = "Updated post...";
$id = 4;

// $sql = "UPDATE posts set title = :title WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'id' => $id]);
// echo "Post updated";

// Delete Data From Db
$id = 4;

$sql = "DELETE FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

// echo "Post deleted";

// search data
$search = "%um%";
$limit = 4;

$sql = "SELECT * FROM posts WHERE title LIKE :search OR body LIKE :search LIMIT $limit";
$stmt = $pdo->prepare($sql);
$stmt->execute(['search' => $search, 'search' => $search]);
$posts = $stmt->fetchAll();

echo "<hr>Resultados da Pesquisa.. <hr>";
foreach ($posts as $key => $post) {
    # echo "<h2>" . $post->title . '</h2>';
    echo "<div style='padding: 10px; border: 1px solid #ddd; 
    margin-bottom: 6px;
    width: 100%; max-width: 400px'>" . $post->body . '</div>';
}