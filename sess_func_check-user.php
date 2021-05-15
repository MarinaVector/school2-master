<?php
session_start();

function dd($item) {
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
    exit;
}
function queryFetch($pdo, $sql, $params = []) {
    $statement = $pdo->prepare($sql);
    if(!empty($params)) {
        foreach ($params as $key => $val) {
            $statement->bindValue($key, $val);
        }
    }
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}
function queryEx($pdo, $sql, $params = []) {
    $statement = $pdo->prepare($sql);
    if(!empty($params)) {
        foreach ($params as $key => $val) {
            $statement->bindValue($key, $val);
        }
    }
    $statement->execute();
    return $statement;
}

if (isset($_COOKIE['username'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username='".$_COOKIE['username']."'");
    $stmt->execute();
    $result = $stmt->fetch();

    if($result['course'] == '1') {
        header('Location: /coaching_life.php');
        exit;
    }
    if($result['course'] == '2') {
        header('Location: /coaching_expert.php');
        exit;
    }

}

?>