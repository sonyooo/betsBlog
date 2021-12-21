<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostCreateRequest;
use App\Http\Requests\BlogPostUpdateRequest;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;
use App\Repositories\BlogPostRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $blogPostRepository;

    private $blogCategoryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->blogPostRepository = app(BlogPostRepository::class);
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }

    public function index(PostFilter $request){
        $posts = BlogPost::filter($request)->paginate(25);

        $item = new BlogPost();
        $categoryList = $this
            ->blogCategoryRepository->getForComboBox();


        return view('blog.admin.posts.index',compact(['posts', 'categoryList', 'item']));
    }

    /* Try to be smart
     *      T_T
     *
     * public function index(PostFilter $request)
    {

        $filter = $this->blogCategoryRepository->getAllWithPaginate();
        $paginator = $this->blogPostRepository->getAllWithPaginate();

        $item = new BlogPost();
        $categoryList = $this
            ->blogCategoryRepository->getForComboBox();
        return view('blog.admin.posts.index', compact('paginator','filter', 'item', 'categoryList'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new BlogPost();
        $categoryList = $this
            ->blogCategoryRepository->getForComboBox();

        return view('blog.admin.posts.edit', compact('item', 'categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BlogPostCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostCreateRequest $request)
    {
        $data = $request->input();
        $item = (new BlogPost())->create($data);

        if($item) {
            return redirect()->route('blog.admin.posts.edit', [$item->id])
                ->with(['success' => 'Запись добавлена']);
        } else {
            return back()->withErrors(['msg' => 'Ошибка в сохранении'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(__METHOD__, $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->blogPostRepository->getEdit($id);

        if(empty($item)){
            abort(404);
        }

        $categoryList =
            $this->blogCategoryRepository->getForComboBox();

        return view('blog.admin.posts.edit',
            compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\BlogPostUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostUpdateRequest $request, $id)
    {
        $item = $this->blogPostRepository->getEdit($id);

        if(empty($item)){
            return back()
                ->withErrors(['msg' => 'Запись id=[{$id}]не найдена'])
                ->withInput();
        }

        $data = $request->all();

        $result = $item->update($data);

        if($result) {
            return redirect()
                ->route('blog.admin.posts.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }


    }

    public function restore($id)
    {
        $delete = BlogPost::withTrashed()->find($id)->restore();

        return redirect()->back()
            ->with(['success' => "Запись id=[$id] восстановлена"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = BlogPost::destroy($id);

        if($result) {
            return redirect()
                ->route('blog.admin.posts.index')
                ->with(['success' => "Запись id=[$id] удалена"]);
        } else {
            return back()->withErrors(['msg' => 'Ошибка удалена']);
        }
    }
}
