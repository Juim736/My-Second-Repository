<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index2');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
        // $users = User::select(['id', 'name', 'email', 'location', 'zone', 'mobile', 'lastGivingBlood', 'created_at', 'updated_at'])->get();

        // return Datatables::of($users)
        //     ->filter(function ($instance) use ($request) {
        //         if ($request->has('name')) {
        //             $instance->collection = $instance->collection->filter(function ($row) use ($request) {
        //                 return Str::contains($row['name'], $request->get('name')) ? true : false;
        //             });
        //         }

        //         if ($request->has('email')) {
        //             $instance->collection = $instance->collection->filter(function ($row) use ($request) {
        //                 return Str::contains($row['email'], $request->get('email')) ? true : false;
        //             });
        //         }
        //     })
        //     ->make(true);
    }
}