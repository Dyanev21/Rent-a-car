<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Requests\TrainingRequest;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::paginate(config('constant.per_page'));

        return view('admin.training.index', compact('trainings'));
    }

    public function edit(Training $training)
    {
        return view('admin.training.edit', compact('training'));
    }

    public function update(TrainingRequest $request, Training $training)
    {
        $training->update($request->all());

        return redirect(route('training.index'));
    }

    public function create()
    {
        return view('admin.training.create');
    }

    public function store(TrainingRequest $request)
    {
        Training::create($request->all());

        return redirect(route('training.index'));
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return redirect(route('training.index'));
    }
}