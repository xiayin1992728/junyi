<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        // 生成数据集合
        $admins = factory(Admin::class)
        				->times(10)
        				->make();
        // 让隐藏的字段可见，并将数据集合转换为数组
        $admins_array = $admins->makeVisible(['password','remember_token'])->toArray();

        // 插入到数据库中
        Admin::insert($admins_array);

        // 单独处理第一个用户的数据
        $admin = Admin::find(1);
        $admin->name = 'xiayin';
        $admin->email = '1084581212@qq.com';
        $admin->save();	

        // 初始化用户角色，将 1 号用户指派为『超级管理』
        $admin->assiignRole('super');

        // 将 2 号用户指派为管理员
        $admin = Admin::find(2);
        $admin->assignRole('Maintainer');			
    }
}
