<?php
function getAllMovies(){
    $pdo = Database::getInstance()->getConnection();

    $get_movie_query = 'SELECT * FROM tbl_movies';
    $get_movie_set = $pdo->prepare($get_movie_query);
    $get_movie_result = $get_movie_set->execute();

    $users = array();


    if($get_movie_result){
        while($user = $get_movie_set->fetch(PDO::FETCH_ASSOC)){
            //parse all the users' info like we did for a singe and pass then
            //inot the users array

            $currentmovie = array();

            
            $currentmovie['id'] = $user['movies_id'];
            $currentmovie['movie'] = $user['movies_cover'];
            $currentmovie['title'] = $user['movies_title'];

            $movies[] = $currentmovie;
        }

        return json_encode($movies);

    }else{
        return 'there wa a problem getting the movies';
    }
}