<?php

namespace App\Imports;

use App\Models\PPI;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;

class DataImport implements ToCollection, WithCalculatedFormulas
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $value) {
            if ($key > 0) {

                if ($value[4] == 'Closed') {
                    $value[21] = "CLOSED";
                }
                if ($value[4] == 'Cancelled') {
                    $value[21] = "CANCELLED";
                } else {
                    $value[21] = "ON PROGRESS";
                }
                if($value[12]==0){
                    $waclose=0;
                }else{
                    $waclose=$value[12];
                }
                
                $createon=Date::excelToDateTimeObject($value[8])->format('m/d/Y');
                
                
                if ($value[9]==null){
                    $date_bai=0;
                }else{
                    $date_bai=Date::excelToDateTimeObject($value[9])->format('m/d/Y');
                }
                
                if ($value[10]==null){
                    $total=0;
                }
                else{
                    $total=$value[11];
                }
                if($value[35]==null){
                    $resultaging=0;
                }else{
                    if ($date_bai==0){
                        $skr=date('m/d/Y');
                        $date1=date_create($skr);
                        $date2=date_create($createon);
                        $hasil=date_diff($date1,$date2);
                        $resultaging=$hasil->days;
                    }else{
                        $date1=date_create($createon);
                        $date2=date_create($date_bai);
                        $dif=date_diff($date1,$date2);
                        $hasil=$dif->days;
                        $resultaging=$hasil-$total;
                    }
                }
                if ($value[42]==null){
                    $timeend=null;
                }
                else{
                    $timeend=Date::excelToDateTimeObject($value[42])->format('d/m/Y');
                }
                if ($value[45]==null){
                    $needsc=0;
                }
                else{
                    $needsc=$resultaging-5;
                }
                if($value[41]==null){
                    $start=null;
                }else{
                    $date7=new Carbon($createon);
                    $jumlah=$date7->addDays();
                    $start=date('d/m/Y',strtotime($jumlah));
                    
                }
                if ($value[48]==null){
                    $datestart1=null;
                }
                else{
                    $datestart1=Date::excelToDateTimeObject($value[48])->format('d/m/Y');
                }
                if ($value[49]==null){
                    $dateend1=null;
                }
                else{
                    $date7=new Carbon($createon);
                    $jumlah=$date7->addDays($needsc);
                    $dateend1=date('d/m/Y',strtotime($jumlah));
                }

                // $time = Carbon::parse($value[9])->format('Y-m-d');

                // dd($value[22], $time);
                PPI::create([
                    'spa'=>$value[0]
                ]);
                DB::table('data')->insert([
                    
                    'p_aktivasi_node_id' => $value[0],
                    'a_request_id' => $value[1],
                    'c_name' => $value[2],
                    'bandwidth' => $value[3],
                    'status' => $value[4],
                    'service_id' => $value[5],
                    'io_number' => $value[6],
                    'address' => $value[7],
                    'create_on' => $createon,
                    'bai_date' => ($value[9]==null)?$value[9]=0:$date_bai,
                    'total_duration' => $total,
                    'week_pa_diterima' => $value[11],
                    'week_pa_close' => $waclose,
                    'tahun_pa' => $value[13],
                    'tahun_pa_close' => $value[14],
                    'lokasi' => $value[15],
                    'kelurahan' => $value[16],
                    'kecamatan' => $value[17],
                    'klasifikasi_pa' => $value[18],
                    'mitra_feeder' => $value[19],
                    'mitra' => $value[20],
                    'status_pa' => $value[21],
                    'status_pa_open' => $value[22],
                    'keterangan' => $value[23],
                    'fat' => $value[24],
                    'port_fat' => $value[25],
                    'koordinat' => $value[26],
                    'sn_ont' => $value[27],
                    'olt' => $value[28],
                    'port_olt' => $value[29],
                    'reservasi_ont' => $value[30],
                    'type_ont' => $value[31],
                    'add_on_tv' => $value[32],
                    'status1' => $value[33],
                    'sn_stb' => $value[34],
                    'aging' => $resultaging,
                    'rab' => $value[36],
                    'alokasi_kabel' => $value[37],
                    'panjang_feeder' => $value[38],
                    'sc_project' => $value[39],
                    'reason' => $value[40],
                    'start_date' => $start,
                    'end_date' => $timeend,
                    'durasi' => $value[43],
                    'aging_sc' => $value[44],
                    'need_sc' => $needsc,
                    'reason1' => $value[46],
                    'aging_after_sc' => ($value[47]==null)?$value[47]=0:$resultaging-$needsc,
                    'start_date1' => $datestart1,
                    'end_date1' => $dateend1,
                    'sc_spkk' => $value[50],
                    'final_aging' => $value[51],
                    'created_at' => $value[52],
                    'updated_at' => $value[53]
                ]);
            }
        }
        session()->flash('sukses', "Selamat Data Berhasil Dimasukan");
    }
}
