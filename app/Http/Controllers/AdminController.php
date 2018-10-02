<?php

namespace App\Http\Controllers;

use App\ClassesStreams;
use App\Examsettings;
use App\FeeSettings;
use App\House;
use App\SchoolSettings;
use App\SessionSetting;
use App\Student;
use App\Subjectsettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

//LOAD BLANK TEMPLATE
    public function blankadmintemplate()
    {
        return view('templates.master');

    }

    //LOAD LOGIN PAGE
    public function loginpage()
    {
        return view('templates.login');

    }
/*------------------------------STUDENTS -------------------------*/

//TO LOAD NEW STUDENT FORM TO CAPTURE NEW REGISTRATION
    public function newstudent()
    {
        $classes = ClassesStreams::distinct()->select('class')->get(); //LOADS DISTICT CLASSES FOR LOOKUP
        $streams = ClassesStreams::distinct()->select('stream')->get(); //LOADS DISTICT STREAMS FOR LOOKUP
        $houses = House::all();
        return view('students.newstudent',compact('classes','streams','houses'));
    }

//TO SAVE NEW STUDENT
    public function savestudent(Request $request)
    {
        $this->validate($request,[
                'name'=>'required',
                'class'=>'required',
                'adm'=>'required|unique:students',
                'stream'=>'required',
                'house'=>'required',
                'dob'=>'required',
                'adm_date'=>'required',
                'adm_type'=>'required',
                'gender'=>'required',
                'special_needs'=>'required',
                'entry_grade'=>'required',
                'old_school'=>'required',
                'photo'=>'required',
                'parent_name'=>'required',
                'parent_phone'=>'required',
                'parent_address'=>'required',
                'parent_email'=>'required'

            ]);
        $file = $request->file('photo');
        $image = Image::make($file);
        $filename = rand(10000,10000000)."_".rand(10000,10000000).".".$file->getClientOriginalExtension();
        $path = public_path().'/photos/'.$filename;
        $image->resize(100,100)->save($path);

        $student = new Student();
        $student->adm = $request->input('adm');
        $student->name = $request->input('name');
        $student->class =$request->input('class');
        $student->stream =$request->input('stream');
        $student->house =$request->input('house');
        $student->dob =$request->input('dob');
        $student->gender =$request->input('gender');
        $student->old_school =$request->input('old_school');
        $student->adm_date =$request->input('adm_date');
        $student->adm_type =$request->input('adm_type');
        $student->photo =$filename;
        $student->entry_grade =$request->input('entry_grade');
        $student->special_needs =$request->input('special_needs');
        $student->parent_name =$request->input('parent_name');
        $student->parent_phone =$request->input('parent_phone');
        $student->parent_address =$request->input('parent_address');
        $student->parent_email =$request->input('parent_email');
        //$student->picture = $filename;
        $student->save();
        $studentname = $request->input('name');
        return redirect('showstudent/'.$student->id)->with('successmsg',"$studentname");
    }
// LOAD ALL STUDENTS IN GRID LAYOUT
    public function allstudents()
    {
        $students = Student::all();
       // return Datatables::of($students)->make(true);
        return view('students.students',compact('students'));
    }
// LOAD ALL STUDENTS Datatables
    public function allstudentsdata()
    {
        $students = Student::select('adm','name','class','stream', 'house');
        return Datatables::of($students)->make(true);
        //return view('students.students',compact('students'));
    }

//SHOW STUDENT DETAIL VIEW
    public function showstudent($id)
    {
        $learners = Student::find($id);
        return view('students.showstudent',compact('learners'));
    }

//EDIT STUDENT RECORD BY ID
    public function editstudent($id)
    {
        $editstudents = Student::find($id);
        $classes = ClassesStreams::distinct()->select('class')->get(); //LOADS DISTICT CLASSES FOR LOOKUP
        $streams = ClassesStreams::distinct()->select('stream')->get(); //LOADS DISTICT STREAMS FOR LOOKUP
        $houses = House::all();
        return view('students.editstudent',compact('editstudents','classes','streams','houses'));
    }

//UPDATE STUDENTS BY ID
    public function updatestudent(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'class'=>'required',
            'adm'=>'required',
            'stream'=>'required',
            'house'=>'required',
            'dob'=>'required',
            'adm_date'=>'required',
            'adm_type'=>'required',
            'gender'=>'required',
            'special_needs'=>'required',
            'entry_grade'=>'required',
            'old_school'=>'required',
            'photo'=>'required',
            'parent_name'=>'required',
            'parent_phone'=>'required',
            'parent_address'=>'required',
            'parent_email'=>'required'

        ]);
        $file = $request->file('photo');
        $image = Image::make($file);
        $filename = rand(10000,10000000)."_".rand(10000,10000000).".".$file->getClientOriginalExtension();
        $path = public_path().'/photos/'.$filename;
        $image->resize(100,100)->save($path);

        $student = Student::find($id);
        $student->adm = $request->input('adm');
        $student->name = $request->input('name');
        $student->class =$request->input('class');
        $student->stream =$request->input('stream');
        $student->house =$request->input('house');
        $student->dob =$request->input('dob');
        $student->gender =$request->input('gender');
        $student->old_school =$request->input('old_school');
        $student->adm_date =$request->input('adm_date');
        $student->adm_type =$request->input('adm_type');
        $student->photo =$filename;
        $student->entry_grade =$request->input('entry_grade');
        $student->special_needs =$request->input('special_needs');
        $student->parent_name =$request->input('parent_name');
        $student->parent_phone =$request->input('parent_phone');
        $student->parent_address =$request->input('parent_address');
        $student->parent_email =$request->input('parent_email');
        //$student->picture = $filename;
        $student->save();
        $studentname = $request->input('name');
        return redirect('showstudent/'.$id)->with('updatesuccessmsg',"$studentname");
    }

//TO DELETE STUDENT RECORD BY ID
    public function deletestudent($id)
    {

        $student=Student::findOrFail($id);
        $photoname = Student::where('id',$id)->get(['photo']);
        Storage::delete( public_path().'/photos/'.$photoname);
        $student->delete();
        return back()->with('delmessage','Student Deleted Successfully...');
    }

/*------------------------------SCHOOL GENERAL SETTINGS -------------------------*/

//LOAD SCHOOL SETTINGS FORM FOR CAPTURING NEW SETTINGS
    public function loadnewsettings()
    {
        return view('settings.newsettings');
    }

//SAVE SCHOOL GENERAL SETTINGS
    public function savesettings(Request $request)
    {
        $this->validate($request,[
            'school_name'=>'required|unique:school_settings',
            'school_motto'=>'required',
            'school_logo'=>'required',
            'school_email'=>'required',
            'school_website'=>'required',
            'school_address'=>'required',
        ]);
        $file = $request->file('school_logo');
        $image = Image::make($file);
        $filename = rand(10000,10000000)."_".rand(10000,10000000).".".$file->getClientOriginalExtension();
        $path = public_path().'/logo/'.$filename;
        $image->resize(150,150)->save($path);
        $setup = new SchoolSettings();
        $setup->school_name = $request->input('school_name');
        $setup->school_email = $request->input('school_email');
        $setup->school_website =$request->input('school_website');
        $setup->school_motto =$request->input('school_motto');
        $setup->school_address =$request->input('school_address');
        $setup->school_logo =$filename;
        //$setup->school_logo = $request->input('school_logo');
        $setup->save();
        return back()->with('settingsmsg','School Settings Posted Successfully');
    }
//DISPLAY ALL SCHOOL SETTINGS IN GRID LAYOUT
    public function allsettings()
    {
        $schools = SchoolSettings::all();
        return view('settings.generalsettings',compact('schools'));
    }

//TO DISPLAY DETAILED VIEW OF SCHOOL SETTINGS BY ID
    public function viewschoolsettings($id)
    {
        $schoolsettings = SchoolSettings::find($id);
        return view('settings.showsettings',compact('schoolsettings'));
    }

//TO EDIT SCHOOL GENERAL SETTINGS
    public function editsettings($id)
    {
        $editschoolsettings = SchoolSettings::find($id);
        return view('settings.editsettings',compact('editschoolsettings'));
    }

//DELETE SCHOOL GENERAL SETTINGS
    public function deleteschool($id)
    {
        SchoolSettings::destroy($id);
        return back()->with('delsettings','School Deleted Successfully...');
    }

 /*------------------------------CLASSES AND STREAMS -------------------------*/

//LOAD SCHOOL CLASSES AND STREAMS FORM
    public function classesform()
    {
       $classes = ClassesStreams::all();
        return view('settings.setclasses',compact('classes'));
    }
//SAVE SCHOOL CLASSES AND STREAMS
    public function saveclasses(Request $request)
    {
        $this->validate($request,[
            'class'=>'required',
            'stream'=>'required',
        ]);
        ClassesStreams::create($request->all());
        return back()->with('classmsg','School Class and Stream Saved Successfully');
    }

//EDIT SCHOOL CLASSES AND STREAMS
    public function editclass($id)
    {
        $editclasses = ClassesStreams::find($id);
        return view('settings.editclasses',compact('editclasses'));
    }
    
//UPDATE CLASSES AND STREAMS
    public function updateclasses(Request $request, $id)
    {
        $this->validate($request,['class'=>'required','stream'=>'required']);
        $updateclasses = ClassesStreams::find($id);
        $updateclasses->class = $request->input('class');
        $updateclasses->stream = $request->input('stream');
        $updateclasses->save();
        return redirect('loadclasses')->with('updateclassmsg','School Classes & Streams Updated Successfully ');
    }

//DELETE SCHOOL CLASSES AND STREAMS
    public function deleteclass($id)
    {
        ClassesStreams::destroy($id);
        return Redirect::back()->with('delclass','Class Deleted Successfully...');
    }
/*------------------------------SCHOOL HOUSES -------------------------*/

//TO LOAD NEW HOUSE FORM AND RETURN HOUSE RECORDS
    public function housesform()
    {
        $houses = House::all();
        return view('settings.sethouses',compact('houses'));
    }
//CREATE SCHOOL HOUSES
    public function savehouses(Request $request)
    {
        $this->validate($request,[
            'house'=>'required|unique:houses',
        ]);
        House::create($request->all());
        return Redirect::back()->with('hsemsg','School House Saved Successfully');
    }
//EDIT SCHOOL HOUSES
    public function edithouses($id)
    {
        $edithouses = House::find($id);
        return view('settings.edithouses', compact('edithouses'));
    }

    public function updatehouses(Request $request, $id)
    {
        $this->validate($request,['house'=>'required']);
        $updatehouse = House::find($id);
        $updatehouse->house = $request->input('house');
        $updatehouse->save();
        $housename = $request->input('house');
        return redirect('loadhouses')->with('updatehsemsg',"$housename Has been updated Successfully");
    }

//DELETE HOUSES
    public function deletehouse($id)
    {
        House::destroy($id);
        return Redirect::back()->with('delhse','House Deleted Successfully...');
    }

/*------------------------------SCHOOL SUBJECTSS -------------------------*/
//LOAD SUBJECT REGISTRATION FORM
    public function subjectsform()
    {
        $loadedsubjects = Subjectsettings::all();
        return view('settings.setsubjects',compact('loadedsubjects'));
    }
//SAVE SCHOOL SUBJECT
    public function savesubject(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|unique:subjectsettings',
            'subject_name'=>'required|unique:subjectsettings',
        ]);
        $savesubject = new Subjectsettings();
        $savesubject->code = $request->input('code');
        $savesubject->subject_name = $request->input('subject_name');
        $savesubject->save();
        return Redirect::back()->with('savesubjectmsg','School Subject Saved Successfully');
    }
//EDIT SUBJECTS
    public function editsubjects($id)
    {
        $editsubjects = Subjectsettings::find($id);
        return view('settings.editsubjects',compact('editsubjects'));
    }
//UPDATE SUBJECTS
    public function updatesubjects(Request $request,$id)
    {
        $this->validate($request,[
            'code'=>'required',
            'subject_name'=>'required',
        ]);
        $updatesubject = Subjectsettings::find($id);
        $updatesubject->code = $request->input('code');
        $updatesubject->subject_name = $request->input('subject_name');
        $updatesubject->save();
        return redirect('loadsubjects')->with('updatesubjectmsg','School Subject Updated Successfully');
    }
//DELETE SUBJECTS
    public function deletesubject($id)
    {
        Subjectsettings::destroy($id);
        return Redirect::back()->with('delsubj','Subject Deleted Successfully...');
    }
/*------------------------------EXAM SETTINGS -------------------------*/

//LOAD EXAMINATION SETTINGS FORM
    public function loadexamsform()
    {
        $loadexams = Examsettings::all();
        return view('settings.setexams',compact('loadexams'));
    }
//SAVE EXAMS
    public function saveexams(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|unique:examsettings',
            'exam_name'=>'required|unique:examsettings',
            'out_of'=>'required',
        ]);
        $examsave = new Examsettings();
        $examsave->code = $request->input('code');
        $examsave->exam_name = $request->input('exam_name');
        $examsave->out_of = $request->input('out_of');
        $examsave->save();
        return Redirect::back()->with('saveexammsg','Exam type Saved Successfully');
    }

//EDIT EXAMS
    public function editexams($id)
    {
        $editexams = Examsettings::find($id);
        return view('settings.editexams',compact('editexams'));
    }
//UPDATE EXAMS
    public function examsupdate(Request $request, $id)
    {
        $this->validate($request,[
            'code'=>'required',
            'exam_name'=>'required',
            'out_of'=>'required',
        ]);
        $examsupdate = Examsettings::find($id);
        $examsupdate->code = $request->input('code');
        $examsupdate->exam_name = $request->input('exam_name');
        $examsupdate->out_of = $request->input('out_of');
        $examsupdate->save();
        return redirect('loadexams')->with('updateexamsmsg','Exam type Updated Successfully');
    }

//DELETE SUBJECTS
    public function deleteexam($id)
    {
        Examsettings::destroy($id);
        return Redirect::back()->with('delexam','Exam Deleted Successfully...');
    }
/*------------------------------SET SCHOOL SESSIONS -------------------------*/
//LOAD SCHOOL SESSIONS SETTIONS
    public function loadsessionsform()
    {
        $loadsessions = SessionSetting::all();
        return view('settings.setsessions',compact('loadsessions'));
    }
    //SAVE SESSIONS
    public function savesession(Request $request)
    {
        $this->validate($request,[
            'school_session'=>'required|unique:session_settings'
        ]);
        $savesession = new SessionSetting();
        $savesession->school_session = $request->input('school_session');
        $savesession->save();
        return Redirect::back()->with('savesessionmsg','School Session Created successfully');
    }
    //EDIT SESSIONS
    public function editsessions($id)
    {
        $editsessions = SessionSetting::find($id);
        return view('settings.editsessions',compact('editsessions'));
    }
    //UPDATE SESSION
    public function updatesession(Request $request, $id)
    {
        $this->validate($request,[
            'school_session'=>'required'
        ]);
        $updatesession = SessionSetting::find($id);
        $updatesession->school_session = $request->input('school_session');
        $updatesession->save();
        return redirect('loadsessions')->with('updatesessionseccess','Session Updated Successfully');
    }
    //DELETE SESSION
    public function deletesession($id)
    {
        SessionSetting::destroy($id);
        return Redirect::back()->with('deletesession','Session Deleted Successfully...');
    }
/*------------------------------FEE ITEMS SETTINGS -------------------------*/
    //LOAD FEE ITEM SETTINGS FORM
    public function loadfeeitemsform()
    {
        $loadfeeitems = FeeSettings::all();
        return view('settings.setfeeitems',compact('loadfeeitems'));
    }
//SAVE FEE ITEMS
    public function savefeeitems(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|unique:fee_settings',
            'fee_item'=>'required|unique:fee_settings',
            'amount'=>'required',
        ]);
        $feeitems = new FeeSettings();
        $feeitems->code = $request->input('code');
        $feeitems->fee_item = $request->input('fee_item');
        $feeitems->amount = $request->input('amount');
        $feeitems->save();

        return Redirect::back()->with('feesuccessmsg','Fee Item Posted Successfully');
    }

/*------------------------------TEACHERS -------------------------*/

//LOAD ALL TEACHERS FORM
    public function allteachers()
    {
        return view('teachers.teachers');
    }
}
