<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAgreementsRequest;
use App\Http\Resources\UserAgreementsResource;
use App\Models\UserAgreements;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserAgreementsController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', UserAgreements::class);

        return UserAgreementsResource::collection(UserAgreements::all());
    }

    public function store(UserAgreementsRequest $request)
    {
        $this->authorize('create', UserAgreements::class);

        return new UserAgreementsResource(UserAgreements::create($request->validated()));
    }

    public function show(UserAgreements $userAgreements)
    {
        $this->authorize('view', $userAgreements);

        return new UserAgreementsResource($userAgreements);
    }

    public function update(UserAgreementsRequest $request, UserAgreements $userAgreements)
    {
        $this->authorize('update', $userAgreements);

        $userAgreements->update($request->validated());

        return new UserAgreementsResource($userAgreements);
    }

    public function destroy(UserAgreements $userAgreements)
    {
        $this->authorize('delete', $userAgreements);

        $userAgreements->delete();

        return response()->json();
    }
}
