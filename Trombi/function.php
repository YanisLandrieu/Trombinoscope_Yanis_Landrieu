<?php
require_once __DIR__ . '/db.php';

function register_user($user_first_name, $user_last_name, $user_class_id,  $user_img_name){
    $db = db_connect();

    $sql = <<<EOD
    INSERT INTO `etudiant` (`nom`, `prenom`, `class_id`, `img_name`) 
    VALUES ( :user_first_name, :user_last_name, :user_class_id, :user_img_name)
    EOD;
    $userInfoStmt = $db->prepare($sql);
    $userInfoStmt->bindValue(':user_first_name', $user_first_name);
    $userInfoStmt->bindValue(':user_last_name', $user_last_name);
    $userInfoStmt->bindValue(':user_class_id', $user_class_id);
    $userInfoStmt->bindValue(':user_img_name', $user_img_name);

    $userInfoStmt->execute();

    return true;
}

function get_all_link() {
    $db = db_connect();

    $sql = <<<EOD
        SELECT 
            `nom`,
            `prenom`
        FROM 
         `etudiant`
    EOD;

    $usersStmt = $db->query($sql);
    $users = $usersStmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}
