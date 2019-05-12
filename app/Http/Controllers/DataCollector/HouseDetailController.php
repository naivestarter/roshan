<?php
//ALTER TABLE `tbl_jobseeker_member_fna` ADD `email` TINYINT(1) NOT NULL DEFAULT '2' AFTER `experience_id`;
namespace App\Http\Controllers\DataCollector;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HouseDetail;

class HouseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['mainView'] = 'datacollector.houseDetail';
        
        return view('datacollector/master', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
                'house_id' => 'required',
                'area' => 'required',
                'structure' => 'required',
                'roof_type' => 'required',
                'earthquake_resistant' => 'required',
                'storey_count' => 'required',
                'ownership' => 'required',
                'is_rented' => 'required'
            ]);

        if(request()->input('is_rented') == '1')
        {
            $rent = request()->validate([
                'is_rented' => 'required',
                'rented_room_count' => 'required', 
                'rented_person_count' => 'required',
                'monthly_rent' => 'required'
            ]);
            $attributes = array_merge($attributes,$rent);
        }
        $attributes['owner_id'] = 12;

        $insertHouseDetail = HouseDetail::create($attributes);
        if(request()->input('ownership_type') == '2')
        {
            return redirect('/housepartnership/create')->with('success','Data has been inserted.');
        }
        elseif(request()->input('ownership_type') == '1')
        {
            return redirect('/house/create')->with('success','Data has been inserted.');
        }
        // if(request()->input('has_house') == '1')
        // {
        //     return redirect('/house_detail/create')->with('success','Data has been inserted.');
        // }
        // else
        // {
        //     return redirect('/HouseDetail/create')->with('success','Data has been inserted.');
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HouseDetail $housedetail)
    {
        //$data = HouseDetail::findorFail($id);
        return $housedetail;
        // $data['mainView'] = 'datacollector.add.HouseDetail';
        // return view('datacollector/master', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseDetail $housedetail)
    {
        $data['data'] = $housedetail;
        $data['mainView'] = 'datacollector.edit.HouseDetail';
        return view('datacollector/master', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HouseDetail $housedetail)
    {
        //
        $housedetail->update(Request()->all());
        // $housedetail = new HouseDetail();

        // $housedetail->unique_ID = request('unique_ID');
        // $housedetail->first_name  = request('first_name');
        // $housedetail->last_name = request('last_name');
        // $housedetail->age = request('age');   
        // $housedetail->education = request('education');  
        // $housedetail->speaciality = request('speaciality');    
        // $housedetail->gender = request('gender'); 
        // $housedetail->family_religion = request('family_religion');    
        // $housedetail->caste = request('caste');  
        // $housedetail->mother_language = request('mother_language');    
        // $housedetail->father_name = request('father_name');    
        // $housedetail->mother_name = request('mother_name');    
        // $housedetail->grandfather_name = request('grandfather_name');   
        // $housedetail->disability = request('disability'); 
        // $housedetail->disabled_identity_card = request('disabled_identity_card'); 
        // $housedetail->disabled_identity_type = request('disabled_identity_type'); 
        // $housedetail->permanent_residence = request('permanent_residence');    
        // $housedetail->province = request('province');  
        // $housedetail->district3 = request('district');   
        // $housedetail->municipality = request('municipality');   
        // $housedetail->village = request('village');    
        // $housedetail->ward = request('ward');

        // $housedetail->save();

        return redirect('/HouseDetail/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseDetail $housedetail)
    {
        //
        $housedetail->delete();

        return redirect('/HouseDetail/create');
    }
}
