<?php

namespace App\Admin\Controllers;

use App\Models\History;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class HistoryController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('公司历程');
            $content->description('展示公司的历程');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('公司历程');
            $content->description('展示公司的历程');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('公司历程');
            $content->description('展示公司的历程');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(History::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->year('年份');

            $grid->title('标题');

            $grid->desc('描述')->display(function ($desc) {
                return strlen($desc) < 100 ? $desc : substr($desc, 0, 100) . ' ...';
            });

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(History::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('year', '年份');

            $form->text('title', '标题');

            $form->textarea('desc', '描述');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
