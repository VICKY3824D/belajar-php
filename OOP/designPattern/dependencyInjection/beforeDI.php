<?php 

// Load dependency
// Ini hanya contoh! biasanya library/class ini terdapat pada file terpisah, lalu kita masukan dengan require/include
// Isinya adalah method untuk produksi file Excel.

class PHPExcel {
    public function export($data){
        echo "Exporting data to excel format ..\n";
    }
}

/**
 * Class Report
 * 
 * Disini kumpulan kode untuk menangani report.
 */
class Report {
    
    // Mengambil total omzet berdasarkan bulan

    public function getTotalOmzetByMonth(){

        $data = ''; // contoh saja. harusnya ada isinya

        //panggil excel
        $PHPExcel = new PHPExcel;
        $PHPExcel->export($data);


        //kode-kode query
        echo "Get omzet. return array \n"; 
    }

    public function getPolpularProduct(){

        $data = '';

        $PHPExcel = new PHPExcel;
        $PHPExcel->export($data);

        //kode kode query dst

        echo "Get popular product. returm array \n";
    }
}

// $report = new Report;
// $report->getTotalOmzetByMonth();
// $report->getPolpularProduct();

?>