<?php

namespace App\Http\Controllers;

use App\Models\Book; // Make sure this is the correct model
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); // Get the search term from the query string
    
        // Query the books, filtering by the search term if provided
        $books = Book::when($search, function ($query, $search) {
            return $query->where('title', 'LIKE', "%{$search}%")
                         ->orWhere('author', 'LIKE', "%{$search}%")
                         ->orWhere('genre', 'LIKE', "%{$search}%");
        })->get();
    
        return response()->json($books);
    }

    public function show($id)
    {
        return Book::findOrFail($id); // Get a single book
    }

    public function store(Request $request)
    {
        // Validate and create a new book
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $book = Book::create($validatedData);
        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Find the book by ID and update its details
        $book = Book::findOrFail($id);
        $book->update($validatedData);

        return response()->json($book, 200); // Return the updated book
    }

    public function destroy($id)
    {
        // Find the book by ID
        $book = Book::findOrFail($id);
        
        // Delete the book
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 200); // Return success message
    }
}


