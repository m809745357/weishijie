<?php

namespace App\Admin\Controllers;

use App\Models\Company;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CompanyController extends Controller
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

            $content->header('公司设置');
            $content->description('网站信息的设置');

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

            $content->header('公司设置');
            $content->description('网站信息的设置');

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

            $content->header('公司设置');
            $content->description('网站信息的设置');

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
        return Admin::grid(Company::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->banner('Banner')->display(function ($banner) {
                return "<img src=\"{$banner}\" width=\"64\" height=\"48\">";
            });

            $grid->image('介绍图')->display(function ($image) {
                return "<img src=\"{$image}\" width=\"64\" height=\"48\">";
            });

            $grid->content('介绍文字')->display(function ($content) {
                return strlen($content) < 10 ?: substr($content, 0, 10) . ' ...';
            });

            $grid->logo('Logo')->display(function ($logo) {
                return "<img src=\"{$logo}\" width=\"45\" height=\"45\">";
            });

            $grid->name('名称');

            $grid->address('地址')->display(function ($address) {
                return strlen($address) > 10 ? substr($address, 0, 10) . ' ...' : $address;
            });

            $grid->email('邮箱');

            $grid->url('网址')->display(function ($url) {
                return strlen($url) > 10 ? substr($url, 0, 10) . ' ...' : $url;
            });

            $grid->mobile('手机');

            $grid->ewm('二维码')->display(function ($ewm) {
                return "<img src=\"{$ewm}\" width=\"108\" height=\"108\">";
            });
            $grid->video('案例文件');

            $grid->title('案例标题')->display(function ($title) {
                return strlen($title) > 10 ? substr($title, 0, 10) . ' ...' : $title;
            });
            $grid->desc('案例描述')->display(function ($desc) {
                return strlen($desc) > 10 ? substr($desc, 0, 10) . ' ...' : $desc;
            });
            $grid->body('案例内容')->display(function ($body) {
                return strlen($body) > 10 ? substr($body, 0, 10) . ' ...' : $body;
            });

            // $grid->created_at();
            // $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Company::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->image('banner', 'Banner');

            $form->image('image', '公司介绍图');

            $form->textarea('content', '公司介绍文字');

            $form->image('logo', 'Logo');

            $form->text('name', '公司名称');

            $form->text('address', '地址');

            $form->email('email', '邮箱');

            $form->text('url', '网址');

            $form->mobile('mobile', '手机号码')->options(['mask' => '999 9999 9999']);

            $form->image('ewm', '二维码');

            $form->file('video', '案例文件');

            $form->text('title', '案例文件');

            $form->textarea('desc', '案例文件');

            $form->editor('body', '案例文件');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
