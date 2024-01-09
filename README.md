old migration file name  chage
2022_02_10_094924_add_blogposts_id_post_image_column
2021_07_31_084720_create_blog_posts_table
2022_02_10_094924_add_blogposts_id_post_image_column
2022_10_05_000047_add_user_id_to_posts_table
2022_10_05_000047_add_user_id_to_posts_table
//
2022_02_10_094924_add_blogposts_id_post_image_column
        // Schema::create('blog_posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('description');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
//

2022_10_01_080339_create_categories_table
///
2022_10_02_230805_create_general_privacy_terms
    // Schema::drop('siteprivacy', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('description');
        //     $table->timestamps();
        // });

        // Schema::drop('siteterms', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('description');
        //     $table->softDeletes();
        //     $table->timestamps();
        // });

        // Schema::drop('general', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('description');
        //     $table->softDeletes();
        //     $table->timestamps();
        // });

        // Schema::drop('siteheader', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('description');
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
///

seeder file name
class blogPostSeeder extends Seeder
class TagOrCategorySeeder extends Seeder

factory file name
class blogPostFactory extends Factory

models file name
class Blogpost extends Model
class Category extends Model
class RoleCategory extends Model
class Tag extends Model

controller file name
class AddmediaController extends Controller
class BlogPostController extends Controller
class CategoryController extends Controller
class TagController extends Controller
class SettingController extends Controller
class CreateRoleCategoryController extends Controller
class CreateRoleController extends Controller
class ViewRoleController extends Controller

resources view file name
create-role-category.blade
create-role.blade
view-all-role.blade


