<?php

namespace App\Controllers;
use App\Models\BooksModel;
use App\Models\MoviesModel;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/login');
    }
    public function login()
{
    $request = \Config\Services::request();

    // Retrieve form data
    $username = $request->getVar('username');
    $password = $request->getVar('password');

    // Validate admin credentials (you'll need to replace this with your actual logic)
    if ($username == 'admin' && $password == 'admin123') {
        // Admin login successful
        // You may set a session variable to indicate that the admin is logged in

        // For example:
        session()->set('admin_logged_in', true);

        return redirect()->to(base_url('admin/dashboard')); // Redirect to admin dashboard
    } else {
        // Admin login failed
        // You may redirect back to the login page with an error message

        // For example:
        session()->setFlashdata('error', 'Invalid username or password');
        return redirect()->to(base_url('admin'));
    }
}
public function dashboard()
{
    // Check if the admin is logged in
    if (session()->get('admin_logged_in')) {
        
        $booksModel = new BooksModel();
        $bookdata = $booksModel->findAll();

        return view('admin/dashboard', ['book' => $bookdata]); // Create a view for the admin dashboard
    } else {
        // Redirect to the admin login page if not logged in
        return redirect()->to(base_url('admin'));
    }
}

public function list()
{
    // Check if the admin is logged in
    if (session()->get('admin_logged_in')) {
        
        $moviesModel = new MoviesModel();
        $mov = $moviesModel->findAll();

        return view('admin/movieList', ['mov' => $mov]); // Create a view for the admin dashboard
    } else {
        // Redirect to the admin login page if not logged in
        return redirect()->to(base_url('admin'));
    }
}
public function logout()
{
    // Clear admin session and redirect to the login page
    session()->remove('admin_logged_in');
    return redirect()->to(base_url('admin'));
}

public function editmov($id)
    {
        // Load your movie with the given $id from the database
        $movieModel = new MoviesModel(); // Change this to your actual model
        $movie = $movieModel->findAll();

        // Load your view with the movie data
        return view('admin/editmov', ['movie' => $movie]);
    }

    public function deletemov($id)
    {
        // Load your movie with the given $id from the database
        $movieModel = new MoviesModel(); // Change this to your actual model
        $movie = $movieModel->find($id);

        // Perform the delete operation
        $movieModel->delete($id);

        // Redirect with success message
        return redirect()->to(base_url('admin/movieList'))->with('success', 'Movie deleted successfully.');
    }

}
