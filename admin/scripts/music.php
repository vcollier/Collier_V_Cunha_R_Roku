<?php
function getAllMusic(){
    $pdo = Database::getInstance()->getConnection();

    $get_music_query = 'SELECT * FROM tbl_music';
    $get_music_set = $pdo->prepare($get_music_query);
    $get_music_result = $get_music_set->execute();

    $users = array();


    if($get_music_result){
        while($user = $get_music_set->fetch(PDO::FETCH_ASSOC)){
            //parse all the users' info like we did for a singe and pass then
            //inot the users array

            $currentmusic = array();

            
            $currentmusic['id'] = $user['music_id'];
            $currentmusic['music'] = $user['music_cover'];
            $currentmusic['title'] = $user['music_title'];

            $music[] = $currentmusic;
        }

        return json_encode($music);

    }else{
        return 'there wa a problem getting the tvs';
    }
}