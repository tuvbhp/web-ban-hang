<?php

namespace App\Repositories\Eloquent;


use App\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use Illuminate\Support\Str;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $category;

    public function getModel()
    {
        return Category::class;
    }

    public function getAllCategory()
    {
        return Category::all();
    }

    public function store(array $input)
    {
        $category = new Category();
        $category->name = $input['name'];
        $category->parent_id = $input['parent_id'];
        $category->slug = Str::slug($input['name'], '-');
        $category->save();
    }

    public function update( $input, $id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($input);
            return $result;
        }
        return false;
    }
}
