<?php

namespace App\Http\Controllers;
use App\Helper\TokenGenerator;
use Illuminate\Http\Request;
use App\Traits\ImageTrait2;
use App\Staff;


class StaffController extends Controller
{
    use ImageTrait2;

    public function index()
    {

        $staffs = Staff::duty()->orderBy('name_th')->get();

        return view('staff.index', [
            'staffs' => $staffs
        ]);
    }

    public function create()
    {
        $status = [
            'duty' => 'Duty',
            'disable' => 'Disable',
        ];
        return view('staff.create', ['status' => $status]);
    }

    public function filter($filter)
    {
        $staffs = Staff::where('status', $filter)
            ->orderBy('name_th')
            ->get();

        return view('staff.admin', [
            'staffs' => $staffs
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'status' => 'required|in:duty,disable',
            'image' => 'required|image|mimes:jpeg,bmp,png',
        ]);

        $staff = $request->all();
        $staff['token'] = (new TokenGenerator())->generate(6);
        $staff['password'] = password_hash($staff['name_en'], PASSWORD_DEFAULT);

        $image = $request->file('image');
        //$image = $this->base64_to_jpeg($request->get('new_image'), $image);
        $file = self::storeImage($image, $request->get('new_image'), 'profile');
        $staff['image'] = $file->id;


        Staff::create($staff);
        return redirect()->action('AdminController@staff')->with('status', 'Create Complete!');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $status = [
            'duty' => 'Duty',
            'disable' => 'Disable',
        ];

        return view('staff.edit', ['status' => $status, 'staff' => $staff]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_th' => 'required|max:191',
            'name_en' => 'required|max:191',
            'email' => 'max:191',
            'website' => 'max:191',
            'position' => 'max:191',
            'status' => 'required|in:duty,disable',
            'image' => 'image|mimes:jpeg,bmp,png',
        ]);

        $staff = Staff::findOrFail($id);
        $editedStaff = $request->all();

        $image = $request->file('image');

        if(isset($image)){
            $file = self::storeImage($image, $request->get('new_image'), 'profile');
            $editedStaff['image'] = $file->id;
        }
        $staff->update($editedStaff);

        return redirect()->action('AdminController@staff')->with('status', 'Update Complete!');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->action('AdminController@staff')->with('status', 'Delete Complete!');
    }

    function base64_to_jpeg( $base64_string, $output_file ) {
        $ifp = fopen( $output_file, 'wb' );

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode( ',', $base64_string );

        // we could add validation here with ensuring count( $data ) > 1
        fwrite( $ifp, base64_decode( $data[ 1 ] ) );

        // clean up the file resource
        fclose( $ifp );

        return $output_file;
    }

    public function show($id){
        $staff = Staff::findOrFail($id);
        $staffs = Staff::duty()->orderBy('name_th')->get();
        return view('staff.detail',['staff_read' => $staff, 'staffs' => $staffs]);
    }
}
