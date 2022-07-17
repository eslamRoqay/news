<?php

namespace App\DataTables;

use App\Models\Post;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PostDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'dashboard.post.parts.action')
            ->editColumn('image', '<img class="img-thumbnail" src="{{$image}}" style="height: 75px; width: 75px;">')
            ->editColumn('title', function ($data) {
                return  substr($data->title,0,50) .'   '. '....' ;
            })
            ->editColumn('content', function ($data) {
                return  substr($data->content,0,50) .'   '. '....' ;
            })
            ->addColumn('id', function ($data) {
                return "<input type='checkbox' name='data[]' class='data-item' value='{$data['id']}'/> ";
            })
            ->rawColumns(['action','image','id']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Post $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('postdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 صـفوف', '25 صـف', '50 صـف', 'كل الصـفوف']
                ])
            ->parameters([
                'language' => [ app()->getLocale()=='en' ?'' : 'url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json']

            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('title_en')->title(trans('posts.title_en')),
            Column::make('content_en')->title(trans('posts.content_en')),
            Column::make('image')->title(trans('posts.image')),
            Column::make('action')->title(trans('posts.action')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Post_' . date('YmdHis');
    }
}
