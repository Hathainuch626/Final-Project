<?php

namespace App\Http\Controllers;
use App\messagermodel;
use App\login;
use App\relationmodel;
use App\Infouser;
use App\treeaccesscollection;
use App\treecollection;
use App\fix_infousercollection;

use Illuminate\Http\Request;

class registed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  view('Account');
    }
    /**
     * Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(Request $request)
    {
        //
        $registednew= new login();
        $registednew->Firstname=$request->get('fname');
        $registednew->Lastname=$request->get('lname');
        $registednew->Birddate=$request->get('dmy');
        $registednew->Sex=$request->get('sex');
        $registednew->Email=$request->get('email');
        $registednew->Password=$request->get('password');
        $registednew->image_user=null;
        $registednew->save();
        session_start();
        $_SESSION["EMAIL"]=$request->get('email');
        return redirect()->route('regis.index')
                        ->with('success','Book created successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */

    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
    
    public function loginuser(Request $request) {
        session_start();
        $email = $request->get('email');
        $password = $request->get('password');

        $user = login::where('Email', $email)->first();
        if ($user) {
            if ($user['Password']==$password) {
                $_SESSION["EMAIL"] = $email;
                $_SESSION["PASSWORD"] = $password;
                $_SESSION["NAME"]=$user['Firstname'];
                $_SESSION["LNAME"]=$user['Lastname'];
                $_SESSION["BIRDDATE"]=$user['Birddate'];
                $_SESSION["SEX"]=$user['Sex'];
                $_SESSION["IMAGE"]=$user->image_user;
                return  view('welcome');
                //echo "success",$user;exit;
            } else {
                echo "fail","password don't ture";exit;
            }

            //return response()->json(['success' => true,'message' => 'User found.']);

        } else {
            return response()->json(['success' => false,'message' => 'User not found.']);
        }
    }

    public function checkcreate($name,$clan){
        //create menber and check menber
        $menbercheck=InfoUser::All();
        $count=InfoUser::const();
        $checkMB=False;
        for ($i=0; $i < $count; $i++) { 
            # code...
            if($menbercheck[$i]->Clan==$clan){
                if($name==$menbercheck[$i]->Firstname){
                    continue;
                }else{
                    $menber=new InfoUser();
                    $menber->Firstname=$name;
                    $menber->clan=$clan;
                    $menber->save();
                }
            }else{
                continue;
            }
        }
    }

    public function relationformset(Request $request)
    {
        switch ($request->get('relation')) {
            case "พ่อ":
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('my');
                $setrelation->parent=$request->get('parent');
                $setrelation->relation='father';
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "แม่":
                $checkparant=relationmodel::where('my',$request->get('my'))->first();
                $setrelation=new relationmodel();
                $setrelation->my=$checkparant->parent;
                $setrelation->parent=$request->get('parent');
                $setrelation->relation="partner";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "พี่":
                $checkparant=relationmodel::where('my',$request->get('my'))->first();
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$checkparant->parent;
                $setrelation->relation="father";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "น้อง":
                $checkparant=relationmodel::where('my',$request->get('my'))->first();
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$checkparant->parent;
                $setrelation->relation="father";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "ภรรยา":
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$request->get('my');
                $setrelation->relation="partner";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "สามี":
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$request->get('my');
                $setrelation->relation="partner";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "ป้า"|"ลุง":
                $checkparant=relationmodel::where('my',$request->get('my'))->first();
                $checkparantafter=relationmodel::where('my',$checkparant->parent)->first();
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$checkparantafter->parent;
                $setrelation->relation="father";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break;
            case "อา":
                $checkparant=relationmodel::where('my',$request->get('my'))->first();
                $checkparantafter=relationmodel::where('my',$checkparant->parent)->first();
                $setrelation=new relationmodel();
                $setrelation->my=$request->get('parent');
                $setrelation->parent=$checkparantafter->parent;
                $setrelation->relation="father";
                $setrelation->level=0;
                $setrelation->clan=$request->get('Clan');
                $setrelation->save();
                break; 
            default:
               $setrelation=new relationmodel();
              $setrelation->my=$request->get('my');
              $setrelation->parent=$request->get('parent');
              $setrelation->relation="father";
              $setrelation->level=0;
              $setrelation->clan=$request->get('Clan');
              $setrelation->save();
          }
        //create relation
        // $setrelation=new relationmodel();
        // $setrelation->my=$request->get('my');
        // $setrelation->parent=$request->get('parent');
        // $setrelation->relation=$request->get('relation');
        // $setrelation->level=0;
        // $setrelation->clan=$request->get('Clan');
        // $setrelation->save();
        //create menber and check menber
        $menbercheck=InfoUser::All();
        $count=InfoUser::count();
        $checkMB=TRUE;
        $checkMB2=TRUE;
        for ($i=0; $i < $count; $i++) { 
            # code...
            if($menbercheck[$i]->Clan==$request->get('Clan')){
                if($request->get('my')==$menbercheck[$i]->Firstname){
                $checkMB=False;
                }
            }else{
                continue;
            }
        }
        for ($x=0; $x < $count; $x++) { 
            # code...
            if($request->get('parent')==null){
                $checkMB2=FALSE;
            }
            if($menbercheck[$x]->Clan==$request->get('Clan')){
                if($request->get('parent')==$menbercheck[$x]->Firstname){
                $checkMB2=FALSE;
            }
            }else{
                continue;
            }
        }
        
        if($checkMB){
            $menber=new InfoUser();
                    $menber->Firstname=$request->get('my');
                    $menber->Clan=$request->get('Clan');
                    $menber->save();
        }
        if($checkMB2){
            $menber=new InfoUser();
            $menber->Firstname=$request->get('parent');
            $menber->Clan=$request->get('Clan');
            $menber->save();
        }
        return redirect('createtree2');
    }

    public function sendmessage(Request $request)
    {
        session_start();
        $user = login::where('Email',$_SESSION['EMAIL'] )->first();
        $messegeRS = new messagermodel();
        $messegeRS->sender=$user->Firstname;
        $messegeRS->ID_sender=$user->_id;
        $messegeRS->contant=$request->get('message');
        $messegeRS->receiver=$request->get('email');
        $testemail=$_GET['email'];
        $user2 = login::where('Email',$testemail)->first();
        $messegeRS->ID_receiver=$user2->_id;
        $messegeRS->Status_read=false;
        $messegeRS->status_check=false;
        $messegeRS->clan=$request->get('tree');
        $messegeRS->save();
        echo ("<script>alert('send success');</script>");
        return redirect('createtree2');
    }

    public function createtree(Request $request)
    {
        session_start();
        $user = login::where('Email',$_SESSION['EMAIL'] )->first();
        $createT= new treecollection();
        $createT->Clan=$request->get('Clan');
        $createT->creator=$user->Firstname;
        $createT->password=$request->get('psw');
        $createT->save();
        //insert first profile in tree
        $createUF=new InfoUser();
        $createUF->Clan=$request->get('Clan');
        $createUF->Firstname=$user->Firstname;
        $createUF->Lastname=$user->Lastname;
        $createUF->Birthdate=$user->Birddate;
        $createUF->Sex=$user->Sex;
        $createUF->Email=$user->Email;
        $createUF->Password=$user->Password;
        $createUF->Status=$user->Status;
        $createUF->Address=null;
        $createUF->Job=null;
        $createUF->Tel=null;
        $createUF->Province=null;
        $createUF->postalcode=null;
        $createUF->Addresslive=null;
        $createUF->province2=null;
        $createUF->postaddrtrue=null;
        $createUF->facebook=null;
        $createUF->creator=$user->Firstname;
        $createUF->save();
        //treeaccess
        $access_user=new treeaccesscollection();
        $access_user->Clan=$request->get('Clan');
        $access_user->access_user=$user->Firstname;
        $access_user->status="Admin";
        $access_user->save();
        return redirect('Accountbycheng');
    }
    function showmenber(){
        session_start();
        //$menber = login::where('Firstname',post('id_menber') )->first();
        return redirect('infomenber');
    }
    function acceptorcancel(Request $request){
        //idfix=5f662e4df933000018004b52&accept=accept
        //$message2=messagermodel::where('receiver',$_SESSION["EMAIL"])->get();
        $messager_user=messagermodel::where('_id',$request->get('idfix'))->first();
        if($request->get('accept')=="accept"){
            $messager_user->status_check=true;
            $messager_user->Status_read=true;
            $messager_user->save();
            //'Clan','access_user','status'
            $access_user=new treeaccesscollection();
            $access_user->Clan=$request->get('clantree');
            $access_user->access_user=$messager_user->receiver;
            $access_user->status="generalUser";
            $access_user->save();
        }else{
            $messager_user->status_check=false;
            $messager_user->Status_read=true;
            $access_user->save();
        }
        return redirect('Messenger');
    }

    public function destroymenber(Request $request)
    {
        //
        
        return redirect();
    }
    // public function searchtest(Request $request)
    // {
    //     //
    //     $who1=$request->get('who1');
    //     $who2=$request->get('who2');

    //     return redirect('testsearch');
    // }
    public function updateinfomenber(Request $request)
    {
        //
        session_start();
        $usertest=infoUser::where('_id',$request->get('id_menber'))->first();
        $usertest->Clan=$request->get('Clan');
        $usertest->Firstname=$request->get('fname');
        $usertest->Lastname=$request->get('lname');
        $usertest->Birthdate=$request->get('dmy');
        $usertest->Sex=$request->get('inputSex');
        $usertest->Email=$request->get('email');
        $usertest->Password=null;
        $usertest->Status=null;
        $usertest->Address=$request->get('address');
        $usertest->Job=$request->get('career');
        $usertest->Tel=$request->get('Pnumber');
        $usertest->Province=$request->get('inputprovince');
        $usertest->postalcode=$request->get('postalcode');
        $usertest->Addresslive=$request->get('addresslive');
        $usertest->province2=$request->get('inputprovince2');
        $usertest->postaddrtrue=$request->get('postalcode2');
        $usertest->facebook=$request->get('facebook');
        $usertest->creator=$_SESSION['NAME'];
        $usertest->save();
        if(isset($_FILES['filelogo'])) {
            $this->validate($request,
            ['filelogo' => 'required|image|mimes:png,jpeg|max:5048']);
            $foder = 'image\imageUser-Infouser';
            //$foderimg = 'project\img_backgrund';
            $filename = $request->file('filelogo')->getClientOriginalName();
            $nameimg = rand() . '.' . $filename;
            // $pathimg = $request->file('img')->store('imgaccount/',$nameimg);
            $pathimg = Image::make($request->file('filelogo'))->fit(170, 180, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pathimg->save(public_path($foder. '/' .$nameimg));
            $usertest->My_image=$nameimg;
        }else{
            $usertest->My_image=null;
        }
        $usertest->save();
        echo "<script>alert('save');</script>";
        return  redirect('historyform?clan='.$request->get("Clan").'&id_menber='.$request->get('id_menber').'&id_name='.$usertest->Firstname.'');
    }

}
