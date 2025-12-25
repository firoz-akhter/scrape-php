<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Article extends Model
// {
//     //
// }




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'excerpt',
        'image',
        'image_alt',
        'author_name',
        'author_url',
        'date',
        'published_at',
        'categories',
        'full_content'
    ];

    protected $casts = [
        'published_at' => 'date',
        'categories' => 'array', // Automatically cast JSON to array
    ];

    /**
     * Parse date string to Carbon instance
     */
    // public function setDateAttribute($value)
    // {
    //     $this->attributes['date'] = $value;
        
    //     // Try to parse the date string to a proper date
    //     try {
    //         $this->attributes['published_at'] = Carbon::parse($value);
    //     } catch (\Exception $e) {
    //         $this->attributes['published_at'] = null;
    //     }
    // }

    /**
     * Scope: Get latest articles
     */
    // public function scopeLatest($query)
    // {
    //     return $query->orderBy('published_at', 'desc')
    //                 ->orderBy('created_at', 'desc');
    // }

    /**
     * Scope: Filter by category name
     */
    // public function scopeByCategory($query, $categoryName)
    // {
    //     return $query->whereJsonContains('categories', [['name' => $categoryName]]);
    // }

    /**
     * Get all unique category names from database
     */
    // public static function getAllCategories()
    // {
    //     $articles = self::whereNotNull('categories')->get();
    //     $allCategories = [];

    //     foreach ($articles as $article) {
    //         if (is_array($article->categories)) {
    //             foreach ($article->categories as $category) {
    //                 if (isset($category['name'])) {
    //                     $allCategories[$category['name']] = $category;
    //                 }
    //             }
    //         }
    //     }

    //     return array_values($allCategories);
    // }
}
