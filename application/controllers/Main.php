<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
   
	public $activities=array();

	public function index()
	{   
        if($this->session->userdata('gold')){
            $total_gold = $this->session->userdata('gold');
            $this->session->set_userdata('gold', $total_gold);
        }
		else{
            $this->session->set_userdata('gold', 0);
        }
		$this->load->view('main');
	}
	
    public function process_money(){
        $type=$this->input->post('action');
        if(isset($type) && $type == "farm"){  
            //do registration process
            $gold=rand(10,20);
            $date=date("F j, Y, h:i:sa");
            $act="You entered a farm and earned $gold. ($date)";

            $data = $this->session->userdata('all_activities');
            array_push($data,$act);
            $this->session->set_userdata('all_activities', $data);

            $total_gold = $this->session->userdata('gold') + $gold;
            $this->session->set_userdata('gold', $total_gold);  
        }
        elseif(isset($type) && $type == "cave"){  

            $gold=rand(5,10);
            $date=date("F j, Y, h:i:sa");
            $act="You entered a cave and earned $gold. ($date)";
           
            $data = $this->session->userdata('all_activities');
            array_push($data,$act);
            $this->session->set_userdata('all_activities', $data);

            $total_gold = $this->session->userdata('gold') + $gold;
            $this->session->set_userdata('gold', $total_gold);

        }elseif(isset($type) && $type == "house"){  

            $gold=rand(2,5);
            $date=date("F j, Y, h:i:sa");
            $act="You entered a house and earned $gold. ($date)";
           
            $data = $this->session->userdata('all_activities');
            array_push($data,$act);
            $this->session->set_userdata('all_activities', $data);

            $total_gold = $this->session->userdata('gold') + $gold;
            $this->session->set_userdata('gold', $total_gold);

        }elseif(isset($type) && $type == "casino"){  

            $gold=rand(0,50);
            $random=rand(1,50);
            if($random<=25){
                $date=date("F j, Y, h:i:sa");
                $act="You entered a casino and earned $gold. ($date) ";
               
                $data = $this->session->userdata('all_activities');
                array_push($data,$act);
                $this->session->set_userdata('all_activities', $data);

                $total_gold = $this->session->userdata('gold') + $gold;
                $this->session->set_userdata('gold', $total_gold);

            }elseif($random>25){
                $date=date("F j, Y, h:i:sa");
                $act="You entered a casino and lost $gold.. Ouch.. ($date)";
               
                $data = $this->session->userdata('all_activities');
                array_push($data,$act);
                $this->session->set_userdata('all_activities', $data);

                $total_gold = $this->session->userdata('gold') + $gold;
                $this->session->set_userdata('gold', $total_gold);
            }
        }
        $this->load->helper('url'); 
        redirect(''); 
    }

}
