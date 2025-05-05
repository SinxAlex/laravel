<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use LaravelViews\Views\TableView;

class VacancyTableView extends TableView
{  /**
 * Sets a model class to get the initial data
 */
    protected $model =Vacancy::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return ['title','hours_work','price','created_at','updated_at'];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->title,
            $model->price,
            $model->hours_work,
            $model->created_at,
            $model->updated_at
        ];
    }
}
