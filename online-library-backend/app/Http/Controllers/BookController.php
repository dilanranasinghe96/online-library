<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        return response()->json($book);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'genre' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
        ]);

        $book->update($validated);

        return response()->json($book);
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully']);
    }

    public function borrowBook(Request $request, $id)
    {
        $book = Book::find($id);
        $user = Auth::user();

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Logic for borrowing a book should be added here

        return response()->json([
            'message' => 'Book borrowed successfully.',
            'book' => $book
        ]);
    }

    public function returnBook(Request $request, $id)
    {
        $book = Book::find($id);
        $user = Auth::user();

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Logic for returning a book should be added here

        return response()->json([
            'message' => 'Book returned successfully.',
            'book' => $book
        ]);
    }
}
