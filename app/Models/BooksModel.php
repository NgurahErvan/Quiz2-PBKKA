<?php
// app/Models/BooksModel.php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table = 'books'; // Replace with your actual table name
    protected $primaryKey = 'id';
    protected $returnType = "object";

    protected $allowedFields = [
        'movie_id',
        'firstname',
        'lastname',
        'contact_no',
        'ts_id',
        'qty',
        'date',
        'time',
    ];
}
