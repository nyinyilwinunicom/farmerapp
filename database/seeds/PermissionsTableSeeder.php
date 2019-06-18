<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-06-18 10:22:48',
            'updated_at' => '2019-06-18 10:22:48',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '17',
                'title'      => 'product_management_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '18',
                'title'      => 'product_category_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '19',
                'title'      => 'product_category_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '20',
                'title'      => 'product_category_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '21',
                'title'      => 'product_category_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '22',
                'title'      => 'product_category_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '23',
                'title'      => 'product_tag_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '24',
                'title'      => 'product_tag_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '25',
                'title'      => 'product_tag_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '26',
                'title'      => 'product_tag_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '27',
                'title'      => 'product_tag_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '28',
                'title'      => 'product_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '29',
                'title'      => 'product_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '30',
                'title'      => 'product_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '31',
                'title'      => 'product_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '32',
                'title'      => 'product_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '33',
                'title'      => 'content_management_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '34',
                'title'      => 'content_category_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '35',
                'title'      => 'content_category_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '36',
                'title'      => 'content_category_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '37',
                'title'      => 'content_category_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '38',
                'title'      => 'content_category_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '39',
                'title'      => 'content_tag_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '40',
                'title'      => 'content_tag_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '41',
                'title'      => 'content_tag_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '42',
                'title'      => 'content_tag_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '43',
                'title'      => 'content_tag_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '44',
                'title'      => 'content_page_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '45',
                'title'      => 'content_page_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '46',
                'title'      => 'content_page_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '47',
                'title'      => 'content_page_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '48',
                'title'      => 'content_page_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '49',
                'title'      => 'contact_management_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '50',
                'title'      => 'contact_company_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '51',
                'title'      => 'contact_company_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '52',
                'title'      => 'contact_company_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '53',
                'title'      => 'contact_company_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '54',
                'title'      => 'contact_company_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '55',
                'title'      => 'contact_contact_create',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '56',
                'title'      => 'contact_contact_edit',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '57',
                'title'      => 'contact_contact_show',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '58',
                'title'      => 'contact_contact_delete',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ],
            [
                'id'         => '59',
                'title'      => 'contact_contact_access',
                'created_at' => '2019-06-18 10:22:48',
                'updated_at' => '2019-06-18 10:22:48',
            ]];

        Permission::insert($permissions);
    }
}
