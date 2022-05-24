<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    
    public function index(Category $category)
    {
        // dd($category);
        // キャッシュクリアコマンド　スペルミスをF5：$composer dump-autoload
        return view('categories.index')->with(['tests' => $category->getByCategory()]);
    }
}
?>