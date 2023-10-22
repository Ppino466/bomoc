<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SumergiblesCortadoras;

class SumergiblesCortadorasTable extends DataTableComponent
{
    protected $model = SumergiblesCortadoras::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setPaginationDisabled();
        $this->setColumnSelectDisabled();

    }

    public function columns(): array
    {
        return [
            Column::make("Modelo", "modelo"),

            Column::make("Hp", "hp"),

            Column::make("Voltaje", "volts"),

            Column::make("Capacidad LPM", "rpm"),

            Column::make("Descarga", "descarga"),

            Column::make("Paso de esfera", "paso_de_esfera"),
        ];
    }
}
