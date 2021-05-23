<!-- Menambahkan skrip php -->
<?php
// Menambahkan file eskternal
include('koneksipendaftaran.php');
require 'vendor/autoload.php';
// Menggunakan namespace dari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Membuat objek
$spreadsheet = new Spreadsheet();
// Membuat variabel untuk activesheet di file excel
$sheet = $spreadsheet->getActiveSheet();
// Mengisi cell
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Tanggal Mengisi');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'Nomor Peserta Ujian');
$sheet->setCellValue('G1', 'Apakah pernah PAUD');
$sheet->setCellValue('H1', 'Apakah pernah TK');
$sheet->setCellValue('I1', 'SKHUN');
$sheet->setCellValue('J1', 'Ijazah');
$sheet->setCellValue('K1', 'Hobi');
$sheet->setCellValue('L1', 'Cita-cita');
$sheet->setCellValue('M1', 'Nama Lengkap');
$sheet->setCellValue('N1', 'Jenis Kelamin');
$sheet->setCellValue('O1', 'NISN');
$sheet->setCellValue('P1', 'NIK');
$sheet->setCellValue('Q1', 'Tempat Lahir');
$sheet->setCellValue('R1', 'Tanggal Lahir');
$sheet->setCellValue('S1', 'Agama');
$sheet->setCellValue('T1', 'Berkebutuhan Khusus');
$sheet->setCellValue('U1', 'Alamat Jalan');
$sheet->setCellValue('V1', 'RT');
$sheet->setCellValue('W1', 'RW');
$sheet->setCellValue('X1', 'Nama Dusun');
$sheet->setCellValue('Y1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('Z1', 'Kecamatan');
$sheet->setCellValue('AA1', 'Kode Pos');
$sheet->setCellValue('AB1', 'Tempat Tinggal');
$sheet->setCellValue('AC1', 'Moda Transportasi');
$sheet->setCellValue('AD1', 'Nomor HP');
$sheet->setCellValue('AE1', 'Nomor Telepon');
$sheet->setCellValue('AF1', 'E-mail Pribadi');
$sheet->setCellValue('AG1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('AH1', 'No. KPS/KKS/PKH/KIP');
$sheet->setCellValue('AI1', 'Kewarganegaraan');
$sheet->setCellValue('AJ1', 'Nama Negara');
// Menyimpan perintah/query
$query = mysqli_query($koneksi,"SELECT*FROM pendaftaran");
// Menyinmpan nilai ke dalam variabel
$i = 2;
$no = 1;
// Membuat loop untuk menata nilai
while ($row = mysqli_fetch_array($query)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['tgl']);
	$sheet->setCellValue('C'.$i, $row['jenis_pendaftaran']);
	$sheet->setCellValue('D'.$i, $row['tgl_masuksekolah']);
	$sheet->setCellValue('E'.$i, $row['nis']);
	$sheet->setCellValue('F'.$i, $row['nomor_peserta']);
	$sheet->setCellValue('G'.$i, $row['paud']);
	$sheet->setCellValue('H'.$i, $row['tk']);
	$sheet->setCellValue('I'.$i, $row['skhun']);
	$sheet->setCellValue('J'.$i, $row['ijazah']);
	$sheet->setCellValue('K'.$i, $row['hobi']);
	$sheet->setCellValue('L'.$i, $row['cita']);
	$sheet->setCellValue('M'.$i, $row['nama']);
	$sheet->setCellValue('N'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('O'.$i, $row['nisn']);
	$sheet->setCellValue('P'.$i, $row['nik']);
	$sheet->setCellValue('Q'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('R'.$i, $row['tgl_lahir']);
	$sheet->setCellValue('S'.$i, $row['agama']);
	$sheet->setCellValue('T'.$i, $row['kebutuhan_khusus']);
	$sheet->setCellValue('U'.$i, $row['alamat']);
	$sheet->setCellValue('V'.$i, $row['rt']);
	$sheet->setCellValue('W'.$i, $row['rw']);
	$sheet->setCellValue('X'.$i, $row['dusun']);
	$sheet->setCellValue('Y'.$i, $row['desa']);
	$sheet->setCellValue('Z'.$i, $row['kecamatan']);
	$sheet->setCellValue('AA'.$i, $row['kode_pos']);
	$sheet->setCellValue('AB'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('AC'.$i, $row['transportasi']);
	$sheet->setCellValue('AD'.$i, $row['nomor_hp']);
	$sheet->setCellValue('AE'.$i, $row['nomor_telp']);
	$sheet->setCellValue('AF'.$i, $row['email']);
	$sheet->setCellValue('AG'.$i, $row['penerima_kps']);
	$sheet->setCellValue('AH'.$i, $row['nomor_kps']);
	$sheet->setCellValue('AI'.$i, $row['kewarganegaraan']);
	$sheet->setCellValue('AJ'.$i, $row['nama_negara']);
	$i++;
}
// Membuat border
$styleArray = [
	'borders' => [
		'allBorders' => [
			'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,],],];
// Mengurangi nilai dalam variabel
$i = $i - 1;
// Mengaplikasikan border ke dalam excel
$sheet->getStyle('A1:AJ'.$i)->applyFromArray($styleArray);

// Merender file
$writer = new Xlsx($spreadsheet);
// Melakukan expor dengan nama file yang sesuai
$writer->save('Report Form Pendaftaran.xlsx');
// Mencetak teks
echo "Data sudah diunduh";
?>