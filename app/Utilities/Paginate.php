<?php

namespace App\Utilities;

class Paginate
{
    /**
     * @param $pagination_data
     * @return array
     */
    public static function getPagination($pagination_data): array
    {
        return [
            "first"         => $pagination_data->url(1),
            "last"          => $pagination_data->url($pagination_data->lastPage()),
            "prev"          => $pagination_data->previousPageUrl(),
            "next"          => $pagination_data->nextPageUrl(),
            "current_page"  => $pagination_data->currentPage(),
            "per_page"      => $pagination_data->perPage(),
            "total_item" 	=> $pagination_data->total(),
            "total_page"    => $pagination_data->lastPage(),
        ];
    }


    /**
     * @param $pagination_data
     * @return float|int
     * Usage:
     * $serial = Paginate::paginateSerial($data)
     * Then use $serial in your foreach loop
     * foreach($data as $item){
     *     echo $serial++;
     * }
     */
    public static function paginateSerial($pagination_data)
    {
        return ($pagination_data->perPage() * ($pagination_data->currentPage() - 1))+1;
    }



}
