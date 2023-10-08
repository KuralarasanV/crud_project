<?php
class register extends CI_Controller{
    public function index() {
        $this->load->view("registration_form");}
    public function student(){
        $mes['msg']='Welcome';
        $this->load->view('reg.php',$mes);
    }
    public function edit($id){
        // echo $id;
        $this->load->model('Regmodel');
        $result['data']=$this->Regmodel->EditData($id);
        $this->load->view('Display_record',$result);

    }
    public function update(){
        $id=$Id;
        extract($_POST);
        $data=[
            'student_name'=>$name,
            'student_mail'=>$email,
            'student_mobile'=>$mobile
        ];
        $this->load->model('Regmodel');
        $result=$this->Regmodel->updateData($data,$id);
        if($result){
            $this->fetch_data();
        }
    }
    public function save_data(){
        // $name=$this->input->post('name'); 
        // $mail=$this->input->post('email');
        // $mobile=$this->input->post('mobile');
        extract($_POST);
        $data=[
            'student_name'=>$name,
            'student_mail'=>$email,
            'student_mobile'=>$mobile,
        ];

            $this->load->model('Regmodel');
            $result=$this->Regmodel->insert_data($data);

            if($result){
                $res['status']='Successfully Inserted';
                $res['text']=200;
                $this->load->view('reg.php',$res);
                // redirect (base_url('register/student'));
                // redirect("http://http://localhost/codeigniter1/register/student");
               
             }
            else{
                echo 'Error';
            }}
    public function fetch_data(){
        $this->load->model('Regmodel');
        $result['table']=$this->Regmodel->GetRecord();
        $this->load->view('Display_record',$result);

    }
    
        

      
       
}


