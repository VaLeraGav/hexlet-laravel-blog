<?php

namespace App\Http\Controllers;

use  App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class ArticleController extends Controller
{
//    public function index()
//    {
//        $articles = Article::paginate();
//        return view('article.index', compact('articles'));
//    }

    public function index(Request $request)
    {
        $query = Article::query(); // Получаю икземпляр QueryBuilder для того, чтобы можно было в дальнейшем в зависимости от условий использовать конструкцию ->
        $userQuery = $request->input('q'); // Получаю строку с запросом от пользователя

        if ($userQuery) { // Если пользовательский запрос не пустой, то формируем WHERE ILIKE запрос к БД
            $query->where('name', 'like', "%{$userQuery}%");
        }
        $articles = $query->orderBy('id', 'desc')->paginate();

        return view('article.index', [
            'articles' => $articles,
            'query' => $userQuery,
        ]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $category = new Article();
        return view('article.create', compact('category'));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'body' => 'required|min:200',
        ]);

        $category = new Article();
        $category->fill($request->all());
        $category->save();

        return redirect()
            ->route('articles.index');
    }
}
