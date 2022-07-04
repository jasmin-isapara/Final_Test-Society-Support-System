<?php

// namespace App\Http\Controllers;

// use App\Http\Request;
// use App\Models\UserComplain;
// use Illuminate\Http\Response;
// use App\Http\Requests\StoreUserComplainRequest;
// use App\Http\Requests\UpdateUserComplainRequest;
// use App\Interfaces\UserComplainRepositoryInterface;

// class UserComplainController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */

//     private UserComplainRepositoryInterface $userComplain;
//     public function __construct(UserComplainRepositoryInterface $UserComplainRepository) 
//     {
//         $this->UserComplainRepository = $UserComplainRepository;
//     }

//     public function index()
//     {
//         return response()->json([
//             'data' => $this->UserComplainRepository->index()
//         ]);

//     }


//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create(Request $request)
//     {
//         $userComplain = $request->only([
//             'name',
//             'slug',
//             'description'
            
//         ]);
//         return response()->json(
//             [
//                 'data' => $this->UserComplainRepository->create($userComplain)
//             ],
//             Response::HTTP_CREATED
//         );

//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreUserComplainRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(StoreUserComplainRequest $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\UserComplain  $userComplain
//      * @return \Illuminate\Http\Response
//      */
//     public function show(UserComplain $userComplain)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\UserComplain  $userComplain
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(UserComplain $userComplain)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateUserComplainRequest  $request
//      * @param  \App\Models\UserComplain  $userComplain
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UpdateUserComplainRequest $request, UserComplain $userComplain)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\UserComplain  $userComplain
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(UserComplain $userComplain)
//     {
//         //
//     }
// }
