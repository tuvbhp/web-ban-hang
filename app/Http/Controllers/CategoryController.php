<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryFormRequest;
use App\Components\Recusive;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface  $categoryRepository)
    {
        $this-> categoryRepository =  $categoryRepository;
    }

    public function index()
    {
        $categories = $this-> categoryRepository->getAllCategory();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parent_id = '');
        return view('admin.category.create', compact('htmlOption'));
    }

    public function store(CategoryFormRequest $request)
    {
        $input = $request->all();
        $this->categoryRepository->store($input);
        return redirect()->route('list.category')->with('status', 'Your category has been create !');
    }

    public function getCategory($parent_id)
    {
        $data = $this->categoryRepository->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parent_id);
        return $htmlOption;
    }

    public function edit($id)
    {
        $categoryRepository = $this->categoryRepository->find($id);
        $htmlOption = $this->getCategory($categoryRepository->parent_id);
        return view('admin.category.edit', compact('categoryRepository', 'htmlOption'));
    }
    public function update(CategoryFormRequest $request,$id)
    {
        $input = $request->all();
        $this->categoryRepository->update($input,$id);
        return redirect()->route('list.category');
    }
    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
        return redirect()->route('list.category');
    }
}
