<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class DoctorTable extends PowerGridComponent
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
        return Doctor::query()->with('department', 'totalappointmentCount', 'monthlyappointmentCount', 'locality');
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
            ->addColumn('department_name', function (Doctor $model) {
                return $model->department->title;
            })
            ->addColumn('qualification')
            ->addColumn('locality', function (Doctor $model) {
                return $model->locality->name;
            })
            ->addColumn('phone')
            ->addColumn('clinic_hospital_name')
            ->addColumn('clinic_hospital_address')
            ->addColumn('monthly_slots')
            ->addColumn('total_patient_count', function (Doctor $model) {
                return $model->totalappointmentCount->first()->aggregate ?? '0';
            })
            ->addColumn('monthly_patient_count', function (Doctor $model) {
                return $model->monthlyappointmentCount->first()->aggregate ?? '0';
            });
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
                ->title(__('DEPARTMENT'))
                ->field('department_name'),

            Column::add()
                ->title(__('LOCALITY'))
                ->field('locality'),

            Column::add()
                ->title(__('QUALIFICATION'))
                ->field('qualification')
                ->sortable(),

            Column::add()
                ->title(__('PHONE'))
                ->field('phone'),

            Column::add()
                ->title(__('CLINIC / HOSPITAL NAME'))
                ->field('clinic_hospital_name')
                ->sortable(),

            Column::add()
                ->title(__('CLINIC / HOSPITAL ADDRESS'))
                ->field('clinic_hospital_address')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title(__('MONTHLY SLOTS'))
                ->field('monthly_slots'),

            Column::add()
                ->title(__('TOTAL PATIENT COUNT'))
                ->field('total_patient_count'),

            Column::add()
                ->title(__('MONTHLY PATIENT COUNT'))
                ->field('monthly_patient_count'),
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
                ->route('doctor.edit', ['id' => 'id']),

            Button::add('destroy')
                ->caption(__('Delete'))
                ->class('bg-red-500 hover:bg-red-700 text-white cursor-pointer text-center py-1 px-2 rounded')
                ->openModal('delete-doctor', ['del_id' => 'id'])
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
           $updated = Doctor::query()->find($data['id'])->update([
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