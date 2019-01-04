<?php

namespace App\Http\Controllers\Employee;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $employee = employee::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('fname', 'LIKE', "%$keyword%")
                ->orWhere('lneme', 'LIKE', "%$keyword%")
                ->orWhere('fname_kana', 'LIKE', "%$keyword%")
                ->orWhere('lnem_kana', 'LIKE', "%$keyword%")
                ->orWhere('birthday', 'LIKE', "%$keyword%")
                ->orWhere('tel1', 'LIKE', "%$keyword%")
                ->orWhere('tel2', 'LIKE', "%$keyword%")
                ->orWhere('tel3', 'LIKE', "%$keyword%")
                ->orWhere('address1', 'LIKE', "%$keyword%")
                ->orWhere('address2', 'LIKE', "%$keyword%")
                ->orWhere('address3', 'LIKE', "%$keyword%")
                ->orWhere('other', 'LIKE', "%$keyword%")
                ->orWhere('admintext', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $employee = employee::paginate($perPage);
        }

        return view('admin.employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        employee::create($requestData);

        return redirect('admin/employee')->with('flash_message', 'employee added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $employee = employee::findOrFail($id);

        return view('admin.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $employee = employee::findOrFail($id);

        return view('admin.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        $employee = employee::findOrFail($id);
        $employee->update($requestData);

        return redirect('admin/employee')->with('flash_message', 'employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        employee::destroy($id);

        return redirect('admin/employee')->with('flash_message', 'employee deleted!');
    }
}
