<?php

namespace App\Admin\Controllers;

use App\Models\Curriculum;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CurriculumController extends Controller
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

            $content->header('课程咨询');
            $content->description('展示可以开课咨询的课程');

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

            $content->header('课程咨询');
            $content->description('展示可以开课咨询的课程');

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

            $content->header('课程咨询');
            $content->description('展示可以开课咨询的课程');

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
        return Admin::grid(Curriculum::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('course.title', '课程名称');

            $grid->started_at('开课时间')->editable('datetime');

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
        return Admin::form(Curriculum::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->select('course_id', '课程信息')->options(\App\Models\Course::all()->pluck('title', 'id'));

            $form->datetime('started_at', '开课时间')->format('YYYY-MM-DD HH:mm:ss');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
