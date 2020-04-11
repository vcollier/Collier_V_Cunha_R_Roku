export default {
    props: ['currentuser'],
    template: `

    <div class="container">
       <pre> {{ this.currentuser} }</pre>
       <h1 class="hiMess">Hello, {{ this.currentuser.uname }}</h1>
       <div class="container">
       <a class="myButton" href="kids.php">Kids</a>

       <ul class="media">
        <a href="index_pan.php">Movies</a>
        <a href="tv.php">TV</a>
        <a href="music.php">Music</a>
       </ul>

       <div class="music-body">
    <h2>
    EVERYTHING YOU WANT IN THE SAME PLACE
    </h2>
    <h3>
    Listen to your favourite songs by year.
    </h3>

    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">

    <a href="music.php">Music</a>
    </div>

    <div class="movies-body">
    <h3>
    Movies? Not old, just older.
    </h3>

    <img src="images/movies.jpg" alt="girl watching a movie" class="homeThumb">

    <a href="index_pan.php">Movies</a>
    </div>

    
    <div class="tv-body">
    <h3>
    Your favourites on tv.
    </h3>

    <img src="images/tv.jpg" alt="people playing football" class="homeThumb">

    <a href="tv.php">TV</a>
    </div>
    </div>
    </div>

    
    `
}