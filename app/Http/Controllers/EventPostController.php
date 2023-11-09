<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Http\Requests\EventPostPostRequest;
use App\Http\Resources\EventPostResource;
use App\Services\IEventPostService;
use Illuminate\Http\Exceptions\HttpResponseException;

class EventPostController extends Controller implements IEventPostController
{
    private IEventPostService $eventPostService;

    /**
     * @param IEventPostService $eventPostService
     */
    public function __construct(IEventPostService $eventPostService)
    {
        $this->eventPostService = $eventPostService;
    }

    public function post(EventPostPostRequest $request): EventPostResource
    {
        try {
            $eventPost = $this->eventPostService->post($request);
            return new EventPostResource($eventPost);

        } catch (\Throwable $throwable){
            throw new HttpResponseException(Helper::getResponse($throwable));
        }
    }

    function delete(string $postId): void
    {
        try {
            $this->eventPostService->delete($postId);
        } catch (\Throwable $throwable){
            throw new HttpResponseException(Helper::getResponse($throwable));
        }
    }

    function list(): array
    {
        try {
            $list = $this->eventPostService->list();
            $response = [
                "data" => []
            ];
            foreach ($list as $index => $item) {
                $response['data'] = $item;
            }

        } catch (\Throwable $throwable){
            throw new HttpResponseException(Helper::getResponse($throwable));
        }
    }
}
