<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class BlogCategoryRepository extends CoreRepository {

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getEdit($id) {
        return $this->startConditions()->find($id);
    }

    /*
     * Получить список категорий для вывода в выпадающем списке
     *
     * @return Collection
     * */
    public function getForComboBox() {

        $colums = implode(', ', [
            'id',
            'CONCAT (id, ". ", title) AS id_title'
        ]);

        $result = $this
            ->startConditions()
            ->selectRaw($colums)
            ->toBase()
            ->get();

        /*DB::table('blog_categories')
            ->select("*", DB::raw("CONCAT(id,'. ',title) AS id_title"))
            ->get();*/

        return $result;


    }

    /**
     * Получить категории для вывода пагинатором
     * @param int|null $perPage
     *
     * @return LengthAwarePaginator
     *
     */


    public function getAllWithPaginate($perPage = null) {
        $colums = ['id', 'title', 'parent_id'];

        $result = $this
            ->startConditions()
            ->select($colums)
            ->with([
                'parentCategory:id,title',
            ])
            ->paginate($perPage);

        return $result;
    }
}
