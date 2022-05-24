<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Repositories\Post\PostRepository;

class PostController extends Controller
{
    public function __construct(protected PostRepository $postRepository)
    {
    }

    public function index()
    {
        return response()->json([
            'data' => $this->postRepository->getAllPosts()
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $this->postRepository->createPost($data);

        return response()->json(
            [
                'data' =>  $data
            ],
            201
        );
    }

    public function show($id)
    {
        return response()->json([
            'data' => $this->postRepository->getPostById($id)
        ]);
    }


    public function update(UpdatePostRequest $request, $id)
    {
        $data = $request->all();
        $this->postRepository->updatePost($id, $data);

        return response()->json([
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $this->postRepository->deletePost($id);

        return response()->json(null, 204);
    }
}
