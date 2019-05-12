<?php
//ALTER TABLE `tbl_jobseeker_member_fna` ADD `email` TINYINT(1) NOT NULL DEFAULT '2' AFTER `experience_id`;
namespace App\Http\Controllers\DataCollector;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HousePartnership;

class HousePartnershipController extends Controller
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
        $data['mainView'] = 'datacollector.housePartnership';
        
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
        die;
        $insertHousePartnership = HousePartnership::create($attributes);
     
      return redirect('/housedetail/create')->with('success','Data has been inserted.');
        }
        // if(request()->input('has_house') == '1')
        // {
        //     return redirect('/house_detail/create')->with('success','Data has been inserted.');
        // }
        // else
        // {
        //     return redirect('/HousePartnership/create')->with('success','Data has been inserted.');
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HousePartnership $housepartnership)
    {
        //$data = HousePartnership::findorFail($id);
        return $HousePartnership;
        // $data['mainView'] = 'datacollector.add.HousePartnership';
        // return view('datacollector/master', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HousePartnership $housepartnership)
    {
        $data['data'] = $HousePartnership;
        $data['mainView'] = 'datacollector.edit.HousePartnership';
        return view('datacollector/master', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HousePartnership $housepartnership)
    {
        //
        $HousePartnership->update(Request()->all());
        // $HousePartnership = new HousePartnership();

        // $HousePartnership->unique_ID = request('unique_ID');
        // $HousePartnership->first_name  = request('first_name');
        // $HousePartnership->last_name = request('last_name');
        // $HousePartnership->age = request('age');   
        // $HousePartnership->education = request('education');  
        // $HousePartnership->speaciality = request('speaciality');    
        // $HousePartnership->gender = request('gender'); 
        // $HousePartnership->family_religion = request('family_religion');    
        // $HousePartnership->caste = request('caste');  
        // $HousePartnership->mother_language = request('mother_language');    
        // $HousePartnership->father_name = request('father_name');    
        // $HousePartnership->mother_name = request('mother_name');    
        // $HousePartnership->grandfather_name = request('grandfather_name');   
        // $HousePartnership->disability = request('disability'); 
        // $HousePartnership->disabled_identity_card = request('disabled_identity_card'); 
        // $HousePartnership->disabled_identity_type = request('disabled_identity_type'); 
        // $HousePartnership->permanent_residence = request('permanent_residence');    
        // $HousePartnership->province = request('province');  
        // $HousePartnership->district3 = request('district');   
        // $HousePartnership->municipality = request('municipality');   
        // $HousePartnership->village = request('village');    
        // $HousePartnership->ward = request('ward');

        // $HousePartnership->save();

        return redirect('/housepartnership/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HousePartnership $housepartnership)
    {
        //
        $housepartnership->delete();

        return redirect('/housepartnership/create');
    }
}
