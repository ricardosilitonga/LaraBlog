<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

//use Illuminate\Support\Collection;

class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        $posts = Post::with('author')
            ->latestFirst()
            ->published()

            ->paginate($this->limit);
        return view('blog.index', compact('posts'));

        // Eager Loading
//        $posts = Post::with('author')
//                ->where('published_at', '<=', Carbon::now())
//                ->orderBy('created_at', 'desc')
//                ->paginate($this->limit);

//        \DB::enableQueryLog();
//        $posts = Post::with('author')->latestFirst()->get();
//        view('blog.index', compact('posts'))->render;
//        dd(\DB::getQueryLog());

//        $posts = Post::with('author')->latest()->get();
//        dd(get_class($posts));
//        $posts = Post::with('author')->latest()->get();
//        return view('blog.index', compact('posts'));

        // Testing N+1 query problem
//        \DB::enableQueryLog();
//        $posts = Post::with('author')->get();
//        view('blog.index', compact('posts'))->render();
//        dd(\DB::getQueryLog());
    }

    public function show(Post $post) {
        return view('blog.show', compact('post'));
    }

//    public function collection_class(){
//
//        //Create a new collection using Collection class
//        $collection1 = new Collection([67,34,89,56,23]);
//
//        //dump the variable content in the browser
//        dd($collection1);
//    }
//
//    public function collect_method(){
//
//        //Create a new collection using the collect method
//        $collection2 = collect(["Good", "Better", "Best"]);
//
//        //dump the variable content in the browser
//        dd($collection2);
//
//    }
//
//    public function search_data()
//    {
//        //Declare a collection
//        $customer = collect([
//            ['id' => '894673', 'name' => 'Rahman', 'email' =>  'rah@gmail.com'],
//            ['id' => '454886', 'name' => 'Janifer', 'email' => 'ganifer@gmail.com'],
//            ['id' => '306007', 'name' => 'Micheal', 'email' => 'mic@gmail.com']
//        ]);
//
//        //Search using contains method
//        if ($customer->contains('name', 'Janifer'))
//        {
//            echo "Janifer exists in the customer list.<br/>";
//        }
//
//        //Declare another collection
//        $marks = collect([
//            ['ID' => '011176644', 'marks' => ['CSE401' => 87, 'CSE409' => 88]],
//            ['ID' => '011176645', 'marks' => ['CSE402' => 69, 'CSE409' => 75]],
//        ]);
//
//        //Search using where method
//        echo $marks->where('ID', '011176645')."<br/>";
//        echo $marks->where('marks.CSE409', 88);
//    }

    public function testing()
    {
        // Clone date Carbon static object
        $date = \Carbon\Carbon::create(2022, 11, 12, 9);
        $posts = array();

        echo $date;
        echo '<br>';

        for ($i = 1; $i <= 10; $i++) {
            $date = $date->addDays(1);
//            echo $date. '<br>';
            $posts[] = ['created_at' => clone $date];
        }

        foreach ($posts as $post) {
            echo $post['created_at'] . '<br>';
        }
    }
}
