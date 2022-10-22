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
        // Получаю икземпляр QueryBuilder для того, чтобы можно было в дальнейшем в
        // зависимости от условий использовать конструкцию ->
        $query = Article::query();
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

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $this->validate($request, [
            'name' => 'required|max:100|unique:articles,name,'. $article->id,
            'body' => 'required|min:200',
        ]);

        $article->fill($data);
        $article->save();
        return redirect()
            ->route('articles.index');
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|max:100|unique:articles',
            'body' => 'required|min:200',
        ]);

        $category = new Article();
        $category->fill($request->all());
        $category->save();

        return redirect()
            ->route('articles.index');
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $article = Article::findOrFail($id);
        if ($article) {
            $article->delete();
        }
        return redirect()
            ->route('articles.index');
    }

    public function login()
    {
        return view('article.login');
    }
    public function register()
    {
        return view('article.register');
    }
}
