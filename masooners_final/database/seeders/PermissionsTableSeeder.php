<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'professional_access',
            ],
            [
                'id'    => 18,
                'title' => 'category_create',
            ],
            [
                'id'    => 19,
                'title' => 'category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'category_show',
            ],
            [
                'id'    => 21,
                'title' => 'category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_style_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_style_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_style_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_style_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_style_access',
            ],
            [
                'id'    => 28,
                'title' => 'award_create',
            ],
            [
                'id'    => 29,
                'title' => 'award_edit',
            ],
            [
                'id'    => 30,
                'title' => 'award_show',
            ],
            [
                'id'    => 31,
                'title' => 'award_delete',
            ],
            [
                'id'    => 32,
                'title' => 'award_access',
            ],
            [
                'id'    => 33,
                'title' => 'professional_detail_create',
            ],
            [
                'id'    => 34,
                'title' => 'professional_detail_edit',
            ],
            [
                'id'    => 35,
                'title' => 'professional_detail_show',
            ],
            [
                'id'    => 36,
                'title' => 'professional_detail_delete',
            ],
            [
                'id'    => 37,
                'title' => 'professional_detail_access',
            ],
            [
                'id'    => 38,
                'title' => 'professional_profile_create',
            ],
            [
                'id'    => 39,
                'title' => 'professional_profile_edit',
            ],
            [
                'id'    => 40,
                'title' => 'professional_profile_show',
            ],
            [
                'id'    => 41,
                'title' => 'professional_profile_delete',
            ],
            [
                'id'    => 42,
                'title' => 'professional_profile_access',
            ],
            [
                'id'    => 43,
                'title' => 'portfolio_create',
            ],
            [
                'id'    => 44,
                'title' => 'portfolio_edit',
            ],
            [
                'id'    => 45,
                'title' => 'portfolio_show',
            ],
            [
                'id'    => 46,
                'title' => 'portfolio_delete',
            ],
            [
                'id'    => 47,
                'title' => 'portfolio_access',
            ],
            [
                'id'    => 48,
                'title' => 'shop_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 54,
                'title' => 'product_create',
            ],
            [
                'id'    => 55,
                'title' => 'product_edit',
            ],
            [
                'id'    => 56,
                'title' => 'product_show',
            ],
            [
                'id'    => 57,
                'title' => 'product_delete',
            ],
            [
                'id'    => 58,
                'title' => 'product_access',
            ],
            [
                'id'    => 59,
                'title' => 'product_sub_category_create',
            ],
            [
                'id'    => 60,
                'title' => 'product_sub_category_edit',
            ],
            [
                'id'    => 61,
                'title' => 'product_sub_category_show',
            ],
            [
                'id'    => 62,
                'title' => 'product_sub_category_delete',
            ],
            [
                'id'    => 63,
                'title' => 'product_sub_category_access',
            ],
            [
                'id'    => 64,
                'title' => 'pro_sub_category_create',
            ],
            [
                'id'    => 65,
                'title' => 'pro_sub_category_edit',
            ],
            [
                'id'    => 66,
                'title' => 'pro_sub_category_show',
            ],
            [
                'id'    => 67,
                'title' => 'pro_sub_category_delete',
            ],
            [
                'id'    => 68,
                'title' => 'pro_sub_category_access',
            ],
            [
                'id'    => 69,
                'title' => 'blog_access',
            ],
            [
                'id'    => 70,
                'title' => 'blog_category_create',
            ],
            [
                'id'    => 71,
                'title' => 'blog_category_edit',
            ],
            [
                'id'    => 72,
                'title' => 'blog_category_show',
            ],
            [
                'id'    => 73,
                'title' => 'blog_category_delete',
            ],
            [
                'id'    => 74,
                'title' => 'blog_category_access',
            ],
            [
                'id'    => 75,
                'title' => 'create_blog_create',
            ],
            [
                'id'    => 76,
                'title' => 'create_blog_edit',
            ],
            [
                'id'    => 77,
                'title' => 'create_blog_show',
            ],
            [
                'id'    => 78,
                'title' => 'create_blog_delete',
            ],
            [
                'id'    => 79,
                'title' => 'create_blog_access',
            ],
            [
                'id'    => 80,
                'title' => 'comment_create',
            ],
            [
                'id'    => 81,
                'title' => 'comment_edit',
            ],
            [
                'id'    => 82,
                'title' => 'comment_show',
            ],
            [
                'id'    => 83,
                'title' => 'comment_delete',
            ],
            [
                'id'    => 84,
                'title' => 'comment_access',
            ],
            [
                'id'    => 85,
                'title' => 'profile_comment_create',
            ],
            [
                'id'    => 86,
                'title' => 'profile_comment_edit',
            ],
            [
                'id'    => 87,
                'title' => 'profile_comment_show',
            ],
            [
                'id'    => 88,
                'title' => 'profile_comment_delete',
            ],
            [
                'id'    => 89,
                'title' => 'profile_comment_access',
            ],
            [
                'id'    => 90,
                'title' => 'product_comment_create',
            ],
            [
                'id'    => 91,
                'title' => 'product_comment_edit',
            ],
            [
                'id'    => 92,
                'title' => 'product_comment_show',
            ],
            [
                'id'    => 93,
                'title' => 'product_comment_delete',
            ],
            [
                'id'    => 94,
                'title' => 'product_comment_access',
            ],
            [
                'id'    => 95,
                'title' => 'cart_create',
            ],
            [
                'id'    => 96,
                'title' => 'cart_edit',
            ],
            [
                'id'    => 97,
                'title' => 'cart_show',
            ],
            [
                'id'    => 98,
                'title' => 'cart_delete',
            ],
            [
                'id'    => 99,
                'title' => 'cart_access',
            ],
            [
                'id'    => 100,
                'title' => 'order_create',
            ],
            [
                'id'    => 101,
                'title' => 'order_edit',
            ],
            [
                'id'    => 102,
                'title' => 'order_show',
            ],
            [
                'id'    => 103,
                'title' => 'order_delete',
            ],
            [
                'id'    => 104,
                'title' => 'order_access',
            ],
            [
                'id'    => 105,
                'title' => 'order_product_create',
            ],
            [
                'id'    => 106,
                'title' => 'order_product_edit',
            ],
            [
                'id'    => 107,
                'title' => 'order_product_show',
            ],
            [
                'id'    => 108,
                'title' => 'order_product_delete',
            ],
            [
                'id'    => 109,
                'title' => 'order_product_access',
            ],
            [
                'id'    => 110,
                'title' => 'wishlist_create',
            ],
            [
                'id'    => 111,
                'title' => 'wishlist_edit',
            ],
            [
                'id'    => 112,
                'title' => 'wishlist_show',
            ],
            [
                'id'    => 113,
                'title' => 'wishlist_delete',
            ],
            [
                'id'    => 114,
                'title' => 'wishlist_access',
            ],
            [
                'id'    => 115,
                'title' => 'customer_login_create',
            ],
            [
                'id'    => 116,
                'title' => 'customer_login_edit',
            ],
            [
                'id'    => 117,
                'title' => 'customer_login_show',
            ],
            [
                'id'    => 118,
                'title' => 'customer_login_delete',
            ],
            [
                'id'    => 119,
                'title' => 'customer_login_access',
            ],
            [
                'id'    => 120,
                'title' => 'profile_create',
            ],
            [
                'id'    => 121,
                'title' => 'profile_edit',
            ],
            [
                'id'    => 122,
                'title' => 'profile_show',
            ],
            [
                'id'    => 123,
                'title' => 'profile_delete',
            ],
            [
                'id'    => 124,
                'title' => 'profile_access',
            ],
            [
                'id'    => 125,
                'title' => 'customer_contact_create',
            ],
            [
                'id'    => 126,
                'title' => 'customer_contact_edit',
            ],
            [
                'id'    => 127,
                'title' => 'customer_contact_show',
            ],
            [
                'id'    => 128,
                'title' => 'customer_contact_delete',
            ],
            [
                'id'    => 129,
                'title' => 'customer_contact_access',
            ],
            [
                'id'    => 130,
                'title' => 'message_create',
            ],
            [
                'id'    => 131,
                'title' => 'message_edit',
            ],
            [
                'id'    => 132,
                'title' => 'message_show',
            ],
            [
                'id'    => 133,
                'title' => 'message_delete',
            ],
            [
                'id'    => 134,
                'title' => 'message_access',
            ],
            [
                'id'    => 135,
                'title' => 'get_idea_access',
            ],
            [
                'id'    => 136,
                'title' => 'idea_category_create',
            ],
            [
                'id'    => 137,
                'title' => 'idea_category_edit',
            ],
            [
                'id'    => 138,
                'title' => 'idea_category_show',
            ],
            [
                'id'    => 139,
                'title' => 'idea_category_delete',
            ],
            [
                'id'    => 140,
                'title' => 'idea_category_access',
            ],
            [
                'id'    => 141,
                'title' => 'idea_style_create',
            ],
            [
                'id'    => 142,
                'title' => 'idea_style_edit',
            ],
            [
                'id'    => 143,
                'title' => 'idea_style_show',
            ],
            [
                'id'    => 144,
                'title' => 'idea_style_delete',
            ],
            [
                'id'    => 145,
                'title' => 'idea_style_access',
            ],
            [
                'id'    => 146,
                'title' => 'idea_create',
            ],
            [
                'id'    => 147,
                'title' => 'idea_edit',
            ],
            [
                'id'    => 148,
                'title' => 'idea_show',
            ],
            [
                'id'    => 149,
                'title' => 'idea_delete',
            ],
            [
                'id'    => 150,
                'title' => 'idea_access',
            ],
            [
                'id'    => 151,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
