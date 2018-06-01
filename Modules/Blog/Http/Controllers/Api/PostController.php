<?php

namespace Modules\Blog\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;
use Modules\Blog\Http\Requests\CreatePostRequest;
use Modules\Blog\Http\Requests\UpdatePostRequest;
use Modules\Blog\Repositories\PostRepository;
use Modules\Blog\Transformers\FullPostTransformer;
use Modules\Blog\Transformers\PostTransformer;

class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    private $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return PostTransformer::collection($this->post->all());
    }

    public function indexServerSide(Request $request)
    {
        return PostTransformer::collection($this->post->serverPaginationFilteringFor($request));
    }

    public function store(CreatePostRequest $request)
    {
        $this->post->create($request->all());

        return response()->json([
            'errors' => false,
            'message' => trans('blog::messages.post created'),
        ]);
    }

    public function find(Post $post)
    {

        return new FullPostTransformer($post);
    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        $this->post->update($post, $request->all());

        return response()->json([
            'errors' => false,
            'message' => trans('blog::messages.post updated'),
        ]);
    }

    public function destroy(Post $post)
    {
        $this->post->destroy($post);

        return response()->json([
            'errors' => false,
            'message' => trans('blog::messages.post deleted'),
        ]);
    }
}
