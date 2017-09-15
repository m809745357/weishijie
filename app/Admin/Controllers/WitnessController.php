<?php

namespace App\Admin\Controllers;

use App\Models\Witness;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class WitnessController extends Controller
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

            $content->header('案例见证');
            $content->description('展示案例见证信息');

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

            $content->header('案例见证');
            $content->description('展示案例见证信息');

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

            $content->header('案例见证');
            $content->description('展示案例见证信息');

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
        return Admin::grid(Witness::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->video('案例文件');

            $grid->image('案例图片')->display(function ($image) {
                return "<img src=\"{$image}\" width=\"64\" height=\"48\">";
            });

            $grid->title('案例标题')->display(function ($title) {
                return strlen($title) > 10 ? substr($title, 0, 10) . ' ...' : $title;
            });
            $grid->desc('案例描述')->display(function ($desc) {
                return strlen($desc) > 10 ? substr($desc, 0, 10) . ' ...' : $desc;
            });
            $grid->body('案例内容')->display(function ($body) {
                return strlen($body) > 10 ? substr($body, 0, 10) . ' ...' : $body;
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
        return Admin::form(Witness::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->file('video', '案例文件');

            $form->image('image', '案例图片');

            $form->text('title', '案例标题');

            $form->textarea('desc', '案例描述');

            $form->editor('body', '案例内容');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
