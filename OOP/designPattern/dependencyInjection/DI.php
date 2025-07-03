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

    /** Excel */
    protected $phpexcel;

    public function __construct(PHPExcel $phpexcel){
        // Set phpexcel
        $this->phpexcel = $phpexcel;
    }
    
    // Mengambil total omzet berdasarkan bulan
    public function getTotalOmzetByMonth(){

        $data = ''; // contoh saja. harusnya ada isinya

        // Menjalankan export via property.
        $this->phpexcel->export($data);


        //kode-kode query
        echo "Get omzet. return array \n"; 
    }

    public function getPolpularProduct(){

        $data = '';

        $this->phpexcel->export($data);

        //kode kode query dst
        echo "Get popular product. returm array \n";
    }
}

// Membuat instance report beserta konstruktor parameter instance PHPExcel.
$report = new Report(new PHPExcel);

// Jalankan method.
$report->getTotalOmzetByMonth();
$report->getPolpularProduct();

?>

