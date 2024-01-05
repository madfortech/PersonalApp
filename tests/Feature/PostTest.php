<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Faker\Factory;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;


test('create posts', function () {
    
    

    $faker = Factory::create();

    $userId = $faker->numberBetween(1, 1000); // Generate a random number between 1 and 1000

    $post = new Post([
        'title' => 'Traveling to Europe',
        'description' => 'amamamam',
        'user_id' => $userId, // Assign the generated ID
        'created_at' =>now(),
        'updated_at' =>now(),
    ]);

    $post->save();
    
    $this->assertModelExists($post);
});
 