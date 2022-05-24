<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function getAllPosts();
    public function getPostById($id);
    public function deletePost($id);
    public function createPost(array $postDetails);
    public function updatePost($id, array $newData);
}
