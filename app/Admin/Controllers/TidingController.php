<?php

namespace App\Admin\Controllers;

use App\Models\Tiding;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TidingController extends Controller
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

            $content->header('公司时事');
            $content->description('记录公司的实时新闻');

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

            $content->header('公司时事');
            $content->description('记录公司的实时新闻');

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

            $content->header('公司时事');
            $content->description('记录公司的实时新闻');

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
        return Admin::grid(Tiding::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->title('标题');

            $grid->image('图片')->display(function ($image) {
                return "<img src=\"{$image}\" width=\"64\" height=\"48\">";
            });

            $grid->desc('描述')->display(function ($desc) {
                return strlen($desc) < 100 ?: substr($desc, 0, 100) . ' ...';
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
        return Admin::form(Tiding::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', '标题');

            $form->image('image', '图片');

            $form->textarea('desc', '描述');

            $form->editor('content', '内容');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
