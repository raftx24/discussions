<?php

namespace LaravelEnso\Discussions\app\Http\Controllers\Reply;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use LaravelEnso\Discussions\app\Models\Reply;

class Destroy extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Reply $reply)
    {
        $this->authorize('handle', $reply);

        $reply->delete();
    }
}
