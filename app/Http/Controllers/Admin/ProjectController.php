<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Role;
use App\Http\Requests\Admin\ProjectFormRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }
    public function add()
    {
        $roles = Role::where('status','=','1')->where('role_id','!=','1')->get();
        return view('admin.projects.add',compact('roles'));
    }
    public function edit_project($id)
    {
        $project =  Project::find($id);
        $roles = Role::where('status','=','1')->where('role_id','!=','1')->get();
        return view('admin.projects.edit', compact('project','roles'));
    }
    public function add_project(ProjectFormRequest $request)
    {
        $data = $request->validated();
        $project = new Project();
        $project->name =  $data['name'];
        $project->assign_developer_ids =  implode(',',$data['assign_user_id']);
        $project->status =  1;
        $project->save();
        return redirect('/admin/projects')->with('status','Project details is submitted successfully.');
    }
    public function edit_projects(ProjectFormRequest $request, $id)
    {
        $data = $request->validated();
        $project = Project::find($id);
        $project->name =  $data['name'];
        $project->assign_developer_ids =  implode(',',$data['assign_user_id']);
        $project->status =  1;
        $project->update();
        return redirect('/admin/projects')->with('status','Project details is Updated successfully.');
    }
    function project_detele($id) 
    {
        $project = Project::find($id);
        if($project):
            $project->delete();
            return redirect('/admin/projects')->with('status','Your Project is deleted successfully.');
        else:
            return redirect('/admin/projects')->with('status','Please try again.');
        endif;
    }
}
