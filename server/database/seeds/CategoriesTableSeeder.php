<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Doc;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $doc = Doc::find(1);

        $cat1 = factory(Category::class)->create();
        $cat2 = factory(Category::class)->create();

        $doc->categories()->sync([$cat1->id, $cat2->id]);
    }
}
