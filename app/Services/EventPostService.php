<?php

namespace App\Services;

use App\Exceptions\FailedResponseException;
use App\Http\Requests\EventPostPostRequest;
use App\Models\EventPost;
use App\Repositories\IEventPostRepository;
use Illuminate\Support\Collection;
use function PHPUnit\Framework\isEmpty;

class EventPostService implements IEventPostService
{
    private IEventPostRepository $eventPostService;
    public function __construct(IEventPostRepository $eventPostService)
    {
        $this->eventPostService = $eventPostService;
    }

    function post(EventPostPostRequest $request): EventPost
    {
        $validated = $request->validated();
        $response = $this->eventPostService->add($validated);
        if (is_null($response)) throw new FailedResponseException(
            "all|An error occurred, event post failed.", 403
        );
        return $response;
    }

    function delete(string $eventPostId): void
    {
        $isRemoved = $this->eventPostService->remove($eventPostId);
        if (!$isRemoved) throw new FailedResponseException(
            "all|An error occurred, event remove failed.", 403
        );
    }

    function list(): Collection
    {
        $collection = $this->eventPostService->list();
        /*if (isEmpty($collection)) throw new FailedResponseException(
            "all|An error occurred, event remove failed.", 403
        );*/
        return $collection;
    }
}
