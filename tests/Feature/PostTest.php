<?php

use App\Models\Post;
use App\Models\User;

test('posts index page is being displayed', function () {
    // Act
    $response = $this->get('/posts/');

    // Assert
    $response->assertStatus(200);
});

test('posts show page is being displayed', function () {
    // Arrange
    $post = Post::factory()->create();

    // Act
    $response = $this->get('/posts/'.$post->slug);

    // Assert
    $response->assertStatus(200);
});

test('posts show page contains title, body and author info', function () {
    // Arrange
    $author = User::factory()->create();
    $post = Post::factory()->create(['author_id' => 1]);

    // Act
    $response = $this->get('/posts/'.$post->slug);

    // Assert
    $response->assertSee($post->title);
    $response->assertSee($post->image);
    $response->assertSee($post->description);
});


test ('deleting_user_changes_post_author_to_unknown', function()
{
    //Arrange
    $user = User::factory()->create();
    $post = Post::factory()->create(['author_id' => $user->id]);

    // Act
    $user->delete();
    $post->refresh();
    ray($post);
    ray($user);

    // Assert
    $this->get('/posts/'.$post->slug)->assertSee('UNKNOWN AUTHOR');
});
