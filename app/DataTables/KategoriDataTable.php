<?php

namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($kategori) {
                return '
                <form action="' . route('kategori.destroy', $kategori->kategori_id) . '" method="POST">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
                <a href="' . route('kategori.edit', $kategori->kategori_id) . '" class="btn btn-sm btn-primary">Edit</a>
                ';
            })
            ->setRowId('id');
    }

    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('kategori-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1);
    }

    protected function getColumns(): array
    {
        return [
            'kategori_id',
            'kategori_kode',
            'kategori_nama',
            'created_at',
            'updated_at',
            'action'
        ];
    }

    protected function filename(): string
    {
        return 'Kategori_' . date('YmdHis');
    }
}
