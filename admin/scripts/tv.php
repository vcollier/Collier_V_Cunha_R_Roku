<?php
function getAllTvs(){
    $pdo = Database::getInstance()->getConnection();

    $get_tv_query = 'SELECT * FROM tbl_tv';
    $get_tv_set = $pdo->prepare($get_tv_query);
    $get_tv_result = $get_tv_set->execute();

    $users = array();


    if($get_tv_result){
        while($user = $get_tv_set->fetch(PDO::FETCH_ASSOC)){
            //parse all the users' info like we did for a singe and pass then
            //inot the users array

            $currenttv = array();

            
            $currenttv['id'] = $user['tvs_id'];
            $currenttv['tv'] = $user['tvs_cover'];
            $currenttv['title'] = $user['tvs_title'];

            $tvs[] = $currenttv;
        }

        return json_encode($tvs);

    }else{
        return 'there wa a problem getting the tvs';
    }
}