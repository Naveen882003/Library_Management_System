<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use CodeIgniter\I18n\Time;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as excel;
use App\Models\CommonModel;
use App\Models\UserModel;


class Home extends BaseController
{
    public function index()
    {

        return view('register.php');


    }
    public function registeruser()
    {
        $db = db_connect();
        $builder = $db->table('tbl_users');
        $data = [];

        $name = $this->request->getPost('uename');
        $email = $this->request->getPost('eid');
        $phone = $this->request->getPost('pno');
        $password = md5($this->request->getPost('pas'));
        $role = $this->request->getPost('role');
        if ($role == 'Student') {
            $role = 1;
        } else {
            $role = 0;
        }


        $data = [
            'user_name' => $name,
            'email_id' => $email,
            'phone_no' => $phone,
            'user_password' => $password,
            'role' => $role

        ];
        
        
        
        $builder->insert($data);
        return view('login');

    }
    public function loginback(){
        return view('register');
    }

    public function user()
    {
        helper('url');
        $session = session();
        $a = $session->get('user_id');


        $db = db_connect();
        $builder = $db->table('user_books');
        $data = array();

        $query = $db->query('select * from user_books where book_status=1 && user_id=' . $a);
        $data['user_info'] = $query->getResultArray();


        return view('user_view', $data);
    }

    public function loginuser()
    {
        helper('url');
        // $this->load->library('session');
        // $session = \Config\Services::session();
        $session = session();
        $db = db_connect();
        $builder = $db->table('tbl_users');

        $name = $this->request->getPost('uename');
        $password = md5($this->request->getPost('pas'));




        $query = $db->query('select count(*) from tbl_users where (user_name="' . $name . '"or email_id="'.$name.'" or phone_no="'.$name.'") and user_password="' . $password . '"');

        $data = $query->getResultArray();
        

        $a = $data[0]['count(*)'];





        $que = $db->query('select * from tbl_users where user_name="' . $name . '" or email_id="' . $name . '" or phone_no="' . $name . '" and user_password="' . $password . '"');

        $dtt['user_info'] = $que->getResultArray();



        if ($a == 1) {

            $dat = $que->getResultArray();


            $c = $dat[0];

            $session->set($c);
            return view('home', $dtt);
        } else {

            return view('login');
        }


    }
    public function approval()
    {


        $db = db_connect();
        $builder = $db->table('user_books');
        $data = array();

        $query = $db->query('select * from user_books where book_status=0');
        $data['user_info'] = $query->getResultArray();


        return view('book_approval', $data);
    }

    public function approve($book_id, $user_id)
    {

        $db = db_connect();
        $builder = $db->table('user_books');
        $builder->set('book_status', 1);
        $builder->where('user_id', $user_id);
        $builder->where('book_id', $book_id);
        $builder->update();
        $this->approval();
        return view('book_approval');


    }

    public function cancel($book_id, $user_id)
    {
        $db = db_connect();
        $builder = $db->table('user_books');
        $builder->set('book_status', 2);
        $builder->where('user_id', $user_id);
        $builder->where('book_id', $book_id);
        $builder->update();
        $this->approval();
        return view('book_approval');

    }

    public function books()
    {

        $db = db_connect();
        $builder = $db->table('tbl_books');
        $data = array();

        $query = $db->query('select * from tbl_books;');
        $data['user_info'] = $query->getResultArray();

        return view('books', $data);
    }
    public function addbooks()
    {
        return view('addbooks');
    }
    public function add()
    {
        $db = db_connect();
        $this->userModel = new UserModel($db);



        $name = $this->request->getPost('bname');
        $author = $this->request->getPost('bauthor');
        $count = $this->request->getPost('bcount');
        $reserved = $this->request->getPost('breserved');

        $data_insert = [
            'book_name' => $name,
            'book_author' => $author,
            'book_count' => $count,
            'book_reserved' => $reserved
        ];
        $result = $this->userModel->add($data_insert);

        $query = $db->query('select * from tbl_books;');
        $data['user_info'] = $query->getResultArray();

        return view('books', $data);



    }
    public function home()
    {
        $session = session();
        $a = $session->get('user_id');
        $db = db_connect();
        $s = $db->query('select * from tbl_users where user_id=' . $a);
        $dtt['user_info'] = $s->getResultArray();

        return view('home', $dtt);
    }

    public function logout()
    {

        return view('login');
    }
    // public function insert($id)
    // {
    //     $db=db_connect();
    //     $query=$db->query('select * from tbl_books where book_id='.$id);
    //     $data_insert['user_info']=$query->getResultArray();

    //     return view('addmybooks',$data_insert);
    // }
    public function inserted($id)
    {
        $session = session();

        $db = db_connect();
        $builder = $db->table('tbl_books');
        $data = array();
        $query = $db->query('select * from tbl_books where book_id=' . $id);
        $data_insert = $query->getResultArray();

        $a = $session->get('user_id');

        $user_id = $session->get('user_id');
        $name = $data_insert[0]['book_name'];
        $author = $data_insert[0]['book_author'];
        $taken = Time::create();
        $due = $taken->addMonths(1);


        $data = [
            'book_id' => $id,
            'user_id' => $user_id,
            'book_name' => $name,
            'book_author' => $author,
            'taken_date' => $taken,
            'due_date' => $due,



        ];


        $builder_2 = $db->table('user_books');
        $builder_2->insert($data);
        // $query=$db->query('select * from user_books where user_id='.$a);
        // $data['user_info']=$query->getResultArray();


        // return view('user_view',$data);
        $this->return_books();
        return view('returned_books', $data);


    }

    public function return_books()
    {
        $session = session();
        $a = $session->get('user_id');
        $db = db_connect();
        $builder = $db->table('user_books');
        $query = $db->query('select * from user_books where user_id=' . $a);
        $data['user_info'] = $query->getResultArray();


        return view('returned_books', $data);
    }
    public function return ($id)
    {
        $session = session();
        $a = $session->get('user_id');
        $db = db_connect();
        $builder = $db->table('user_books');
        $builder->set('book_status', 3);
        $builder->where('user_id', $a);
        $builder->where('book_id', $id);
        $builder->update();


        $db = db_connect();
        $builder = $db->table('tbl_books');
        $query = $db->query('select * from tbl_books where book_id=' . $id);
        $count_data = $query->getResultArray();
        $a = $count_data[0]['book_count'];

        $data = [
            'book_count' => $a + 1
        ];
        $builder->where('book_id', $id);
        $builder->update($data);

        $session = session();
        $a = $session->get('user_id');
        $db = db_connect();
        $query = $db->query('select * from user_books where user_id="' . $a . '" and book_id="' . $id . '"');
        $date_array = $query->getResultArray();
        $s = $date_array[0]['due_date'];
        // $c=intval(strtotime($s));


        $m = Time::create();
        $d = intval(strtotime($m));
        // echo $c<$d;
        if (intval(strtotime($s)) < intval(strtotime($m))) {
            $builder = $db->table('user_books');
            $data = [
                'Fine' => 100
            ];
            $builder->where('user_id', $a);
            $builder->where('book_id', $id);
            $builder->update($data);



        }





        $this->return_books();
        return view('returned_books');









    }
    public function renew($id)
    {
        $session = session();
        $a = $session->get('user_id');
        $db = db_connect();
        $builder = $db->table('user_books');

        $taken = Time::create();
        $due = $taken->addMonths(1);
        $data = [
            'taken_date' => $taken,
            'due_date' => $due
        ];
        $builder->where('book_id', $id);
        $builder->where('user_id', $a);
        $builder->update($data);

        // $db=db_connect();
        // $query=$db->query('select * from user_books ')
        // return view();
        $this->user();
        return view('user_view');

    }
    public function bookIssued()
    {



        $db = db_connect();
        $builder = $db->table('user_books');
        $query = $db->query('select * from user_books where book_status=1');
        $data['user_info'] = $query->getResultArray();

        return view('book_issued', $data);
    }





    // public function save(){
    //     $db=db_connect();
    //     $this->userModel = new UserModel($db);
    //     $data=[
    //         'book_name'=>'naveen kumar biography',
    //         'book_author'=>'naveen kumar',
    //         'book_count'=>18,
    //         'book_reserved'=>0
    //     ];
    //     $result=$this->userModel->aad($data);

    //     // $this->$db->userModel->delete(12);
    // }
    public function excelImport()
    {
        $model = new CommonModel();
        $result = $model->selectQuery();
        $data['tableData'] = $result;
        return view('welcome_message', $data);
    }

    public function download()
    {
        $model = new CommonModel();
        $spreadsheet = new Spreadsheet();
        $result = $model->selectQuery();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("A1", "book_name");
        $sheet->setCellValue("B1", "book_author");
        $sheet->setCellValue("C1", "book_count");
        $sheet->setCellValue("D1", "book_reserved");

        $count = 2;

        foreach ($result as $row) {
            $sheet->setCellValue("A" . $count, $row->book_name);
            $sheet->setCellValue("B" . $count, $row->book_author);
            $sheet->setCellValue("C" . $count, $row->book_count);
            $sheet->setCellValue("D" . $count, $row->book_reserved);

            $count++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("data.xlsx");
        return $this->response->download("data.xlsx", null)->setFileName("books.xlsx");
    }

    public function upload()
    {
        $model = new CommonModel();
        if ($this->request->getMethod() == "post") {
            $rules = $this->validate([
                'filename' => 'uploaded[filename]|max_size[filename,500]|ext_in[filename,csv,xlsx]',
            ]);
            if ($rules == true) {
                $filename = $this->request->getFile('filename');
                $name = $filename->getName();
                $tempName = $filename->getTempName();
                $arr_file = explode(".", $name);
                $extension = end($arr_file);
                if ('csv' == $extension) {
                    $reader = new Csv();
                } else {
                    $reader = new excel();
                }
                $spreadsheet = $reader->load($tempName);
                $sheetData = $spreadsheet->getActiveSheet()->toArray();
                if (!empty($sheetData)) {
                    for ($i = 1; $i < count($sheetData); $i++) {
                        $book_name = $sheetData[$i][0];
                        $book_author = $sheetData[$i][1];
                        $book_count = $sheetData[$i][2];
                        $book_reserved = $sheetData[$i][3];

                        $data = [
                            'book_name' => $book_name,
                            'book_author' => $book_author,
                            'book_count' => $book_count,
                            'book_reserved' => $book_reserved,

                        ];


                        // if (!empty($fetchSingleData)) {
                        //     $model->updateValue( $data);
                        // } else {
                        $model->insertValue($data);

                    }

                    return redirect()->to(site_url("excelImport"));
                } else {
                    return view("upload");
                }
            } else {
                return view("upload");
            }
        } else {
            return view("upload");
        }
    }


    public function fineStatus($id, $uid)
    {

        $db = db_connect();
        $session = session();

        $builder = $db->table('user_books');
        $data = [
            'Fine' => 0
        ];

        $builder->where('user_id', $uid);
        $builder->where('book_id', $id);
        $builder->update($data);

        $query = $db->query('select * from user_books where book_status=0');
        $data['user_info'] = $query->getResultArray();

        return view('returned_books', $data);
    }

}