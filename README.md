# new_repo_php
<h1>New REPO for DebtGes PHP Challenge</h1>

<h2>API ENDPOINTS</h2>

<h3>Get all----------</h3>

<h4>Users</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllUsers

<h4>Movies</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllMovies

<h4>Reviews</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllReviews

<h3>Get specific----------</h3>

<h4>User</h4>

curl -X GET http://localhost:<em>PORT</em>/getuser/<em>{id}</em>

<h4>Movie</h4>

curl -X GET http://localhost:<em>PORT</em>/getmovie/<em>{id}</em>

<h4>Review</h4>

curl -X GET http://localhost:<em>PORT</em>/getreview/<em>{id}</em>

<h3>Insert new----------</h3>

<h4>User</h4>

curl -X POST http://localhost:<em>PORT</em>/insertUser -d "username=<em>USERNAME</em>"

<h4>Movie</h4>

curl -X POST http://localhost:<em>PORT</em>/insertMovie -d "movie=<em>MOVIE_TITLE</em>"

<h4>Review</h4>

curl -X POST http://localhost:<em>PORT</em>/insertReview -d "idMovie=<em>MOVIE_ID</em> & idUser=<em>USER_ID</em> & rating=<em>RATING</em> & review=<em>REVIEW_TEXT</em>"

<h3>Delete----------</h3>

<h4>User</h4>

curl -X DELETE http://localhost:<em>PORT</em>/deleteUser/<em>{id}</em>

<h4>Movie</h4>

curl -X DELETE http://localhost:<em>PORT</em>/deleteMovie/<em>{id}</em>

<h4>Review</h4>

curl -X DELETE http://localhost:<em>PORT</em>/deleteReview/<em>{id}</em>

<h3>Observations</h3>

<ul>
	<li>Used faker (PHP lib) to generate fake data. However it cant generate movie titles. I generated street addresses to replace the movie title in order to save me some time.</li>
	<li>Missing the constraints. i.e., when deleting a user with a certain id, that user must exist in the DB.</li>
	<li>Missing a good response when deleting something from the DB.</li>
</ul>
