<?php

namespace App\Http\Controllers;
Use App\Delivary;
Use App\User;
use Illuminate\Support\Facades\DB;
use App\DeliveryType;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class delivariesController extends Controller
{
  /*
   *  |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function index()
    {
         $DeliveryTypeValue =  DB::table('DeliveryTypes')->select('id', 'dname')->get();
        return view('auth.registerDelivary')->with('DeliveryTypeList' , $DeliveryTypeValue);
       
    }
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'Delivery' => 'required|string|max:255',
            'field' => 'required|string|max:255',
            'phone' => 'required|string|max:14',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $user=new User;
        $user->email=$data['email'];
        $user->type=0;
        $user->password=bcrypt($data['password']);
        $user->name=$data['name'];
        $user->save();

        $delivary=new Delivary;
        $delivary->phone=$data['phone'];
        $delivary->address=$data['address'];
        $delivary->job=$data['job'];
        $delivary->nid=$data['nid'];
        $delivary->delivary_type_forginKey=$data['Delivery_type_id'];
        $delivary->birthDate=$data['birthDate'];
        $delivary->user_id=$user->id;
        $delivary->save();
        return view('delivary');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          
        $data=DB::table('delivaries')
            ->join('DeliveryTypes', 'delivaries.delivary_type_forginKey', '=', 'DeliveryTypes.id')
            ->join('users', 'users.id', '=', 'delivaries.user_id')
            ->select('DeliveryTypes.dname','users.name','users.email','delivaries.*')->where('delivaries.id','=',$id)
            ->get();
            $orders = DB::table('orders')
                ->where('delivary_forginKey','=',$id)
                ->count();


       // $data=Delivary::orderBy('updated_at','desc')->get();

        return view('profile.delivery',['Delivery'=>$data,'ordersNo'=>$orders]);
    }
    public function view()
    {
        
      

        //
    }
       public function viewList()
    {
        
        
        $data=DB::table('delivaries')
            ->join('DeliveryTypes', 'delivaries.delivary_type_forginKey', '=', 'DeliveryTypes.id')
            ->join('users', 'users.id', '=', 'delivaries.user_id')
            ->select('DeliveryTypes.dname','users.name','delivaries.id')
            ->get();
       // $data=Delivary::orderBy('updated_at','desc')->get();
        return view('admin.delivaryList',['allDeliveries'=>$data]);


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      
      
        $data=DB::table('users')->where(
            'id','=' ,$id
        )->delete();
        return back();

    }
}
