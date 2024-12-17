<?php
 

test('create post', function () {
    
    $category = Category::factory()->create();
    $post = Post::factory()->create([
        'category_id' => $category->id,
    ]);

    $response = $this->get('/posts');

    $response
        ->assertOk()
        ->assertSee($category->title)
        ->assertSee($post->title);
 
});