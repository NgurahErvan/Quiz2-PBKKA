<?php
// app/Models/MoviesModel.php
namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $table = 'movies';

    protected $returnType = "array";
    public function getMovieTitle($movieId)
    {
        // Assuming your movies table has a column 'title' for the movie title
        $movie = $this->find($movieId);

        // Check if the movie exists
        if ($movie) {
            return $movie['title'];
        } else {
            return 'Movie Not Found';
        }
    }
}
