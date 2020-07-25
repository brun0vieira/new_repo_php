# new_repo_php
<h1>New REPO for DebtGes PHP Challenge</h1>

<h2>API ENDPOINTS</h2>

<h3>Get all</h3>

<h4>Users</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllUsers

<h4>Movies</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllMovies

<h4>Reviews</h4>

curl -X GET http://localhost:<em>PORT</em>/getAllReviews

<h3>Get specific</h3>

<h4>User</h4>

curl -X GET http://localhost:<em>PORT</em>/getuser/<em>{id}</em>

<h4>Movie</h4>

curl -X GET http://localhost:<em>PORT</em>/getmovie/<em>{id}</em>

<h4>Review</h4>

curl -X GET http://localhost:<em>PORT</em>/getreview/<em>{id}</em>

<h3>Insert new</h3>

<h4>User</h4>

curl -X POST http://localhost:<em>PORT</em>/insertUser -d "username=<em>USERNAME</em>"

<h4>Movie</h4>

curl -X POST http://localhost:<em>PORT</em>/insertMovie -d "movie=<em>MOVIE_TITLE</em>"

