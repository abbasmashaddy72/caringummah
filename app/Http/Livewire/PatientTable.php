<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use App\Models\Ummah;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class PatientTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this->showPerPage()
            ->showRecordCount('full')
            ->showExportOption('download', ['excel', 'csv'])
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Patient::query()->with('ummah');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('phone')
            ->addColumn('location')
            ->addColumn('ummah_name', function (Patient $model) {
                return $model->ummah->name;
            })
            ->addColumn('relation');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title(__('ID'))
                ->field('id'),

            Column::add()
                ->title(__('NAME'))
                ->field('name')
                ->sortable(),

            Column::add()
                ->title(__('PHONE'))
                ->field('phone'),

            Column::add()
                ->title(__('LOCATION'))
                ->field('location')
                ->sortable(),

            Column::add()
                ->title(__('UMMAH NAME'))
                ->field('ummah_name'),

            Column::add()
                ->title(__('RELATION'))
                ->field('relation')
                ->sortable(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */


    public function actions(): array
    {
        return [
            Button::add('edit')
                ->caption(__('Edit'))
                ->class('bg-blue-500 hover:bg-blue-700 text-white text-center py-1 px-2 rounded')
                ->route('patient.edit', ['id' => 'id']),

            Button::add('destroy')
                ->caption(__('Delete'))
                ->class('bg-red-500 hover:bg-red-700 text-white cursor-pointer text-center py-1 px-2 rounded')
                ->openModal('delete-patient', ['del_id' => 'id'])
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods
    |
    */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Patient::query()->find($data['id'])->update([
                $data['field'] => $data['value']
           ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }
    */

    public function template(): ?string
    {
        return null;
    }
}
