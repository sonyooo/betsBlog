<?php
namespace App\Filters;

class PostFilter extends QueryFilter {
    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id);
        });
    }

    public function search($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('content_html', 'LIKE', '%'.$search_string.'%');
    }
}
