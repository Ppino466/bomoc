<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\NegrasSw;

class NegrasSwTable extends DataTableComponent
{
    protected $model = NegrasSw::class;

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
                
            Column::make("HP", "hp"),
              
            Column::make("Voltaje", "volts"),

            Column::make("Fases", "fases"),

            Column::make("RPM", "rpm"),

                
        ];
    }
}
