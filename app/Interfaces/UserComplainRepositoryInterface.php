<?php

namespace App\Interfaces;

use App\Http\Requests\Admin\ComplainFormRequest;

interface UserComplainRepositoryInterface 
{
    public function index();
    public function create();
    public function store(ComplainFormRequest $request);
    public function edit($complain_id);
    public function update(ComplainFormRequest $request,$complain_id);
    public function destroy($complain_id);
}