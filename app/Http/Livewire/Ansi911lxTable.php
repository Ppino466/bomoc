<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ansi911lx;

class Ansi911lxTable extends DataTableComponent
{
    protected $model = Ansi911lx::class;

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

            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),

            Column::make("Curvas de operación", "ficha")
            ->format(
                fn($value) => "<a  target='_blank' href='$value' class='btn btn-primary'>Ver</a>"
            )
            ->html(),

        ];
    }
}
