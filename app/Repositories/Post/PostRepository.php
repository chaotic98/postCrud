<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAllPosts()
    {
        return $this->post->all();
    }

    public function getPostById($id)
    {
        return $this->post->findOrFail($id);
    }

    public function deletePost($id)
    {
        return $this->post->destroy($id);
    }

    public function createPost(array $postDetails)
    {
        return  $this->post->create($postDetails);
    }

    public function updatePost($id, array $newData)
    {
        $post = $this->post->findOrFail($id);
        return  $post->update($newData);
    }
}
