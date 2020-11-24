<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RoleRequest;
use App\Model\Module;
use App\Model\Role;
use Illuminate\Http\Request;
use Mockery\Exception;

class RoleController extends BackendBaseController
{

    protected $base_route  = 'backend.role';
    protected $view_path   = 'backend.role';
    protected $panel       = 'Role';
    protected  $page_title,$page_method;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page_title = 'List';
        $this->page_method = 'index';

        try{
            $data['rows'] = Role::all();
            return view($this->loadDataToView($this->view_path.'.index'),compact('data'));
//            return view('backend.tag.index',compact('data'));
        }catch (Exception $e) {
            redirect()->route('home')->flash('exception', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page_title = 'Create';
        $this->page_method = 'create';
        return view($this->loadDataToView($this->view_path.'.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $record = Role::create($request->all());
            if ($record){
                return redirect()->route($this->base_route . '.index')->with('success',$this->panel . ' created successfully');

            } else {
                return back()->with('error', $this->panel . ' creation failed');
            }
        } catch(Exception $e){
            return redirect()->route($this->base_route . '.index')->with('exception',$e->getMessage());
            return redirect()->route($this->base_route . '.index')->with('exception',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->page_title = 'View';
        $this->page_method = 'show';
        $data['row'] = Role::find($id);

        return view($this->loadDataToView($this->view_path.'.show'),compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->page_title = 'Edit';
        $this->page_method = 'edit';
        $data['row'] = Role::find($id);
        return view($this->loadDataToView($this->view_path.'.edit'),compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['row'] = Role::find($id);
        $request->request->add(['updated_by' => auth()->user()->id]);
        $data['row']->update($request->all());
        return redirect()->route($this->base_route . '.index')->with('success',$this->panel . ' updated successfully');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Role::destroy($id);
            return redirect()->route($this->base_route . '.index')->with('success',$this->panel . ' deleted successfully');
        } catch (Exception $exception){
            return redirect()->route($this->base_route . '.index')->with('exception',$exception->getMessage());
        }

    }

    public function showPermission($id){
        $this->page_title = 'Assign';
        $this->page_method = 'permission';
        $data['role'] = Role::find($id);
        $data['modules'] = Module::all();
        $assigned_permissions = [];
        foreach ($data['role']->permissions as $permission){
            array_push($assigned_permissions,$permission->id);
        }
        $data['assigned_permissions'] = $assigned_permissions;
        return view($this->loadDataToView($this->view_path.'.permission'),compact('data'));
    }

    public function assignPermission(Request $request)
    {
        try{
            $data['role'] = Role::find($request->role_id);
            if ($data['role']->permissions()->sync($request->input('permission_id'))){
                return redirect()->route($this->base_route . '.index')->with('success', 'Permissions assigned successfully');

            } else {
                return back()->with('error', ' Permissions assign failed');
            }
        } catch(Exception $e){
            return redirect()->route($this->base_route . '.index')->with('exception',$e->getMessage());
        }


    }


}
