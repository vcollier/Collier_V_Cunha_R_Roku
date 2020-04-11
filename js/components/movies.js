export default{
    name: "movies",
    template:`
    <?php require_once '../../load.php';

?>
    <div>
    <?php while ($row = $getMovies->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="movie-item">
            <img src="images/<?php echo $row['movies_cover']; ?>" alt="<?php echo $row['movies_title']; ?>" />
            <h2><?php echo $row['movies_title']; ?></h2>
            <h4>Movie Released: <?php echo $row['movies_year']; ?></h4>
            <a href="details.php?id=<?php echo $row['movies_id']; ?>">Read More...</a>
        </div>
    <?php endwhile;?>

    <h1 class="pageHeader">Movies</h1>
    <div>
    <div>
    <h4 class="yearHead">1950s</h4>
   <div class="year-col">
   <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
   <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
   <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
   <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">

   </div>
    </div>

    <div>
    <h4 class="yearHead">1960s</h4>
    <div class="year-col">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
 
    </div>
    </div>

    <div>
    <h4 class="yearHead">1970s</h4>
    <div class="year-col">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
 
    </div>
    </div>

    <div>
    <h4 class="yearHead">1980s</h4>
    <div class="year-col">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
    <img src="images/music.jpg" alt="girl listening to music" class="homeThumb">
 
    </div>
    </div>
    </div>
    </div>
    `,

    created: function () {
        this.fetchAllMovies();
    },
    
    methods:{
		fetchAllMovies(){
			let url = './admin/admin_getmovies.php?allmovies=ture';
			fetch(url)
			.then(res => res.json())
			.then(data => this.userList = data)
			.catch((error)  => console.error(error))
		}
	},
}