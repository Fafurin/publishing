<?php

namespace App\Http\Commands\Admin\Order;

use App\Models\Book;
use App\Models\BooksFiles;
use App\Models\OutputInformation;
use Illuminate\Support\Facades\Storage;

class CreateBookCommandHandler
{
    public function handle(array $data): Book
    {
        $outputInformation = [
            'isbn' => $data['isbn'],
            'circulation' => $data['circulation'],
        ];

        $bookOutputInformation = OutputInformation::firstOrCreate($outputInformation);
        unset($outputInformation);

        $bookData = [
            'title' => $data['title'],
            'type_id' => $data['type_id'],
            'format_id' => $data['format_id'],
            'output_information_id' => $bookOutputInformation->id,
        ];

        $book = Book::firstOrCreate($bookData);
        unset($bookData);

        if (isset($data['files'])) {
            foreach ($data['files'] as $file) {
                $file = [
                    'book_id' => $book->id,
                    'path' => Storage::disk('public')->put('files/' . $book->id, $file)
                ];
                BooksFiles::firstOrCreate($file);
            }
        }
        return $book;
    }
}
