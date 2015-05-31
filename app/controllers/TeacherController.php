<?php

class TeacherController extends BaseController{


	public function showProfile($department, $shortName)
	{
		$teacher = Teacher::where('shortName', '=', $shortName)->firstOrFail();

		return View::make('teachers.profile', $teacher);
	}


	public function showTeachers($department)
	{
		return $department;
	}
}
