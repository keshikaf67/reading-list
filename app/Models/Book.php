<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // The three allowed statuses: value stored in the database => label shown on screen
    public const STATUSES = [
        'to-read' => 'To read',
        'reading' => 'Reading',
        'finished' => 'Finished',
    ];

    // Fields that may be filled in with Book::create() / update()
    protected $fillable = ['title', 'author', 'status'];

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }
}
