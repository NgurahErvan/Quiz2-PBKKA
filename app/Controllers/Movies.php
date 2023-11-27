<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MoviesModel;
use App\Models\TheaterModel;
use App\Models\BooksModel;

class Movies extends Controller
{
    protected $booksModel;

    public function __construct()
    {
        $this->booksModel = new BooksModel(); // Replace with your actual model name
    }

    public function index()
    {
        $data['movies'] = $this->getMovies();
        return view('movielist', $data);
    }

    private function getMovies()
    {
        $db = \Config\Database::connect();
        return $db->query("SELECT * FROM movies WHERE '" . date('Y-m-d') . "' BETWEEN date(date_showing) AND date(end_date) ORDER BY rand() LIMIT 10")->getResultArray();
    }

    public function reserve($id)
    {
        $moviesModel = new MoviesModel();
        $theaterModel = new TheaterModel();
        $mov = $moviesModel->find($id);
        $theaters = $theaterModel->findAll();

        if (!$mov) {
            // Handle movie not found
            return redirect()->to('/error-page');
        }

        // Your duration calculation logic here
        $duration = $this->calculateDuration($mov['duration']);

        // Pass data to the view
        return view('reserve', ['mov' => $mov, 'duration' => $duration, 'theaters' => $theaters]);
    }

    private function calculateDuration($duration)
    {


        // Format the duration
        $formattedDuration = $duration * 60;

        return $formattedDuration;
    }

    public function book()
    {
        $request = \Config\Services::request();
        // Retrieve form data
        $data = [
            'movie_id' => $request->getVar('movie_id'),
            'firstname' => $request->getVar('firstname'),
            'lastname' => $request->getVar('lastname'),
            'contact_no' => $request->getVar('contact_no'),
            'ts_id' => 1,
            'qty' => $request->getVar('qty'),
            'date' => $request->getVar('date'),
            'time' => $request->getVar('time'),
        ];


        // Insert data into the 'books' table
        $this->booksModel->insert($data);

        // Optionally, you can redirect to a success page or perform other actions
        // For example, redirecting to the movies page
        session()->setFlashdata('message', 'Reserve Success');
        return redirect()->to(base_url('/movies'));
    }
    
}
