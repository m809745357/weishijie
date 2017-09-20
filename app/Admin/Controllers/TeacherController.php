<?php

namespace App\Admin\Controllers;

use App\Models\Teacher;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TeacherController extends Controller
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

            $content->header('师资力量');
            $content->description('展示官网的教师信息');

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

            $content->header('师资力量');
            $content->description('展示官网的教师信息');

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

            $content->header('师资力量');
            $content->description('展示官网的教师信息');

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
        return Admin::grid(Teacher::class, function (Grid $grid) {
            $grid->id('ID')->sortable();

            $grid->name('姓名');

            $grid->image('图片')->display(function ($image) {
                return "<img src=\"{$image}\" width=\"64\" height=\"48\">";
            });

            $grid->desc('描述')->display(function ($desc) {
                return strlen($desc) < 100 ? $desc : substr($desc, 0, 100) . ' ...';
            });

            $grid->order('排序')->editable('text');

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
        return Admin::form(Teacher::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('name', '姓名');

            $form->image('image', '图片');

            $form->text('desc', '描述');

            $form->textarea('content', '内容');

            $form->number('order', '排序');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
