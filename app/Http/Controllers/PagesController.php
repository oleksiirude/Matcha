<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class PagesController extends Controller
{
    public function home() {
		return view('main');
	}

	public function contacts() {
		$contacts = [
			'1' => '+38093028904',
			'2' => '+38067244576',
			'3' => '+38055724479'
		];

		return view('contacts', [
			'contacts' => $contacts
		]);
	}

	public function about() {
		return view('about');
	}
	public function projects() {
    	$projects = Project::all();

		return view('projects', compact('projects'));
	}

	public function create() {
		return view('create');
	}

	public function store() {
    	$project = new Project();
    	$project->title = request('title');
    	$project->description = request('description');
    	$project->save();

    	return redirect('/projects');
	}
}
