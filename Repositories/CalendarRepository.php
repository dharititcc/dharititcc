<?php namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CalendarRepository.
*/
class CalendarRepository extends BaseRepository
{
    /**
    * Associated Repository Model.
    */
    // const MODEL = Faq::class;

    /**
     * Method getCatServices
     *
     * @return void
     */
    public function getCatServices()
    {
        $category = Category::with([
                        'children'
                    ])->whereNull('parent_category')->get();

        $data = [
            'categories'       => $category,
        ];

        return response()->json($data);
    }
}