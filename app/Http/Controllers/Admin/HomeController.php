<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Latest Products',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Product',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'Y-m-d H:i:s',
            'column_class'          => 'col-md-12',
            'entries_number'        => '20',
            'fields'                => [
                '0' => 'id',
                '1' => 'name',
                '2' => 'description',
                '3' => 'price',
                '4' => 'category',
                '5' => 'photo',
            ],
        ];

        $settings1['data'] = $settings1['model']::latest()
            ->take($settings1['entries_number'])
            ->get();

        return view('home', compact('settings1'));
    }
}
