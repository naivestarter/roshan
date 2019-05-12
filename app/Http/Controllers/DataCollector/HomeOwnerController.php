<?php
//ALTER TABLE `tbl_jobseeker_member_fna` ADD `email` TINYINT(1) NOT NULL DEFAULT '2' AFTER `experience_id`;
namespace App\Http\Controllers\DataCollector;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeOwner;
use App\Disability;

class HomeOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
       
        
        return "caka";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['mainView'] = 'datacollector.homeOwner';
        
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
                'first_name' => 'required',
                'unique_id' => 'required',
                'last_name' => 'required',
                'age' => 'required',
                'education' => 'required',
                'speaciality' => 'required',
                'gender' => 'required',
                'family_religion' => 'required',
                'caste' => 'required',
                'mother_language' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'grandfather_name' => 'required',
                'permanent_residence' => 'required',
                'province' => 'required',
                'district' => 'required',
                'municipality' => 'required',
                'village' => 'required',
                'ward' => 'required'
            ]);

        if(request()->input('disability') == '1')
        {
            $disability = request()->validate([

                'disability' => 'required',
                'disabled_identity_type' => 'required'
            ]);
        }

        $insertHomeOwner = HomeOwner::create($attributes);

        if(request()->input('disability') == '1')
        {
            $disability['owner_id'] = $insertHomeOwner->id;
            $insertDisability = Disability::create($disability);
        }
        if(request()->input('has_house') == '1')
        {
            return redirect('/housedetail/create')->with('success','Data has been inserted.');
        }
        else
        {
            return redirect('/homeowner/create')->with('success','Data has been inserted.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HomeOwner $homeowner)
    {
        //$data = HomeOwner::findorFail($id);
        return $homeowner;
        // $data['mainView'] = 'datacollector.add.homeOwner';
        // return view('datacollector/master', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeOwner $homeowner)
    {
        $data['data'] = $homeowner;
        $data['mainView'] = 'datacollector.edit.homeOwner';
        return view('datacollector/master', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeOwner $homeowner)
    {
        //
        $homeowner->update(Request()->all());
        // $homeowner = new HomeOwner();

        // $homeowner->unique_ID = request('unique_ID');
        // $homeowner->first_name  = request('first_name');
        // $homeowner->last_name = request('last_name');
        // $homeowner->age = request('age');   
        // $homeowner->education = request('education');  
        // $homeowner->speaciality = request('speaciality');    
        // $homeowner->gender = request('gender'); 
        // $homeowner->family_religion = request('family_religion');    
        // $homeowner->caste = request('caste');  
        // $homeowner->mother_language = request('mother_language');    
        // $homeowner->father_name = request('father_name');    
        // $homeowner->mother_name = request('mother_name');    
        // $homeowner->grandfather_name = request('grandfather_name');   
        // $homeowner->disability = request('disability'); 
        // $homeowner->disabled_identity_card = request('disabled_identity_card'); 
        // $homeowner->disabled_identity_type = request('disabled_identity_type'); 
        // $homeowner->permanent_residence = request('permanent_residence');    
        // $homeowner->province = request('province');  
        // $homeowner->district3 = request('district');   
        // $homeowner->municipality = request('municipality');   
        // $homeowner->village = request('village');    
        // $homeowner->ward = request('ward');

        // $homeowner->save();

        return redirect('/homeowner/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeOwner $homeowner)
    {
        //
        $homeowner->delete();

        return redirect('/homeowner/create');
    }
}
