<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as excel;
use App\Models\CommonModel;

class My_Controller extends BaseController
{
    public function index()
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
                $filename =  $this->request->getFile('filename');
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
                        $book_count= $sheetData[$i][2];
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

                    return redirect()->to(site_url("/"));
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
}
