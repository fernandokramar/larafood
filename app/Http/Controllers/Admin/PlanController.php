<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $repository;

    public function __construct(plan $plan)
    {
        $this->repository = $plan;
    }

    public function index(){
        $plans = $this->repository->latest()->paginate(5);

        return view('admin.pages.plans.index', [
            'plans' => $plans,
        ]);
    }

    public function create(){
        return view('admin.pages.plans.create');
        
    }

    public function store(StoreUpdatePlan $request){

        $this->repository->create($request->all());
        return redirect()->route('plans.index');

    }

    public function show($url){
        $plans = $this->repository->where('url', $url)->first();

        if(!$plans)
            return redirect()->back();

        return view('admin.pages.plans.show', [ 
            'plans' => $plans 
        ]);
    }

    public function destroy($url){
        $plans = $this->repository->where('url', $url)->first();

        if(!$plans)
            return redirect()->back();

        $plans->delete();

        return redirect()->route('plans.index');
    }

    public function search(Request $request){
        $filters = $request->except('_token');

        $plans = $this->repository->search($request->filter);

        return view('admin.pages.plans.index', [ 
            'plans' => $plans,
            'filters' => $filters,
        ]);
    }

    public function edit($url){
        $plans = $this->repository->where('url', $url)->first();

        if(!$plans)
            return redirect()->back();

       

        return view('admin.pages.plans.edit', [
            'plans' => $plans
        ]);
    }

    public function update(StoreUpdatePlan $request, $url){
        $plans = $this->repository->where('url', $url)->first();

        if(!$plans)
            return redirect()->back();

        $plans->update($request->all());

        return redirect()->route('plans.index');
    }
}
