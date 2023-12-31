<?php

namespace App\Http\Livewire\Producto;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Carbon\Carbon;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductoTable extends DataTableComponent
{
    protected $model = Producto::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }



    public function filters(): array
    {
        return [
            TextFilter::make('Modelo')
                ->config([
                    'placeholder' => 'Search Name',
                    'maxlength' => '25',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('productos.modelo', 'like', '%' . $value . '%');
                }),
            SelectFilter::make('Activo')

                ->options([
                    '' => 'Todos',
                    '1' => 'Activo',
                    '0' => 'Inactivo',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('estatus', 1);
                    } elseif ($value === '0') {
                        $builder->where('estatus', 0);
                    }
                }),

        ];
    }

    public function columns(): array
    {
        return [
          
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Tipo", "tipo")
                ->sortable(),
            Column::make("Marca", "marca")
                ->sortable(),
            Column::make("Serie", "serie")
                ->searchable()
                ->sortable(),
            Column::make("Modelo", "modelo")
                ->sortable(),
            Column::make("HP", "hp")
                ->sortable(),
            Column::make("Fases", "fases")
                ->sortable(),
            Column::make("Volts", "volts")
                ->sortable(),
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc")
                ->sortable(),
            Column::make("RPM", "rpm")
                ->sortable(),
            Column::make("Paso de esfera", "paso_de_esfera")
                ->sortable(),
            Column::make("Descarga", "descarga")
                ->sortable(),
            Column::make("Pasos", "pasos")
                ->sortable(),
            Column::make("Diametro", "diametro_de_pozo")
                ->sortable(),
            Column::make("Nota del producto", "nota")
                ->sortable(),
            Column::make("Base de acero", "base_de_acero")
                ->sortable(),
            Column::make("RuedasN", "ruedas_neumaticas")
                ->sortable(),
            Column::make("RuedasF", "ruedas_de_fierro")
                ->sortable(),
            Column::make("Material","material")
            ->sortable(),    
                Column::make("Ficha","ficha")
                ->sortable(),    
            Column::make("Creado", "created_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->diffForHumans();
                }),
            Column::make("Ultima modificación", "updated_at")
                ->sortable()
                ->format(function ($value) {
                    return Carbon::parse($value)->diffForHumans();
                }),
            BooleanColumn::make("Activo", "estatus")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'btn-group',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Eliminar')
                        ->title(function ($row) {
                            if ($row->estatus == '1') {
                                return 'Baja';
                            } else {
                                return 'Alta';
                            }
                        })
                        ->location(function ($row) {
                            if ($row->estatus == '1') {
                                return route('productos.delete', $row->id);
                            } else {
                                return route('productos.delete', $row->id);
                            }
                        })
                        ->attributes(function ($row) {
                            if ($row->estatus == '1') {
                                return [
                                    'class' => 'btn btn-danger lift',
                                    'onclick' => "return confirm('¿Estás seguro de que deseas desactivar este producto?')"
                                ];
                            } else {
                                return [
                                    'class' => 'btn btn-success lift',
                                    'onclick' => "return confirm('¿Estás seguro de que deseas activar este producto?')"
                                ];
                            }
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn ($row) => 'Editar ' . $row->name)
                        ->location(fn ($row) => route('productos.edit', $row->id))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-primary lift',
                            ];
                        }),
                ]),
        ];
    }
}
