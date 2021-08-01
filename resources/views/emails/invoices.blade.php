@component('mail::message')
# PT Indonesia Comnet Plus

Divisi Aktivasi<br>
Permintaan Pelaksanaan Instalasi FOC FOT<br>
Kepada HP<br>
Atas Perintah : Ferri Jayagiri<br>

@component('mail::table')
| Nomor| Item | Keterangan |
| - |:-------------:| --------:|
| <pre>  1</pre>  |  No Project Activation | <pre> {{$data[0]->p_aktivasi_node_id}}</pre> |
| <pre>  2</pre> |  Pelanggan | <pre> {{$data[0]->c_name}}</pre> |
| <pre>  3</pre> |  Alamat | {{$data[0]->address}}  |
| <pre>  4</pre> |  Alamat Lama| <pre> --</pre> |
| <pre>  5</pre> |  Contact Pelanggan| <pre> -- </pre>|
| <pre>  6</pre> |  Layanan| <pre> Stroomnet</pre> |
| <pre>  7</pre> |  Tujuan POP/JB Petik | <pre> --</pre> |
| <pre>  8</pre> |  PLT | <pre> Ferri Jayagiri</pre> |
| <pre>  9</pre> |  Target Tescomm | <pre> <?php $date = date('d F Y', strtotime($ppi[0]->target_tes));
                        echo $date ?></pre> |
| | <pre> Target Submit Dok.Lengkap| <pre> <?php $date = date('d F Y', strtotime($ppi[0]->data_lengkap));
                        echo $date ?></pre> |
| <pre>  10</pre> |  Penanggung Jawab Pekerjaan | <pre> Fatan  Aifa</pre>|
| <pre>  11</pre> |  Tanggal Order | <pre> <?php $date = date('d F Y', strtotime($ppi[0]->ppi));
                        echo $date ?></pre>  |
@endcomponent

Terimakasih dan mohon konfirmasi kesanggupan 1 hari serta melampirkan hasil survey maksimal 3 (tiga) hari setelah email kami kirimkan.<br>
# Nb: Lokasi Pekerjaan ada pada alamat Link

@component('mail::table')
| Bersedia Untuk Dilaksanakan | Bersedia Untuk Dilaksanakan |
| :-------------:| --------:|
|<pre>              PT...................</pre> <br><pre>                          TTD</pre> <br><br><pre>                   (.....................)</pre>|<pre>                PT...................</pre> <br><pre>                          TTD</pre> <br><br><pre>                   (.....................)</pre>|
                                                                                                                                                                                                                                                                                   




@endcomponent
@component('mail::table')
|<pre>Alasan Tidak Bersedia:                                                                                   <br><br><br>  </pre> |
| :-------------:|
@endcomponent
Status Monitoring  Penanggung Jawab Pekerjaan * Beritanda √ pada kolom yang tersedia sesuai status <br>

@component('mail::table')
| Survey ||Instalasi ||QC || Lain-lain|
| :-------------:|-| --------:|-| :-------------|-|:-------------|
|Pengisian WO |<pre>  {{$wo}}  </pre>|Joint|<pre>  {{$join}}  </pre>|LaporanDok.|<pre>  {{$lap}}  </pre>|<pre> {{$vendor}}</pre>|
|Ijin |<pre>  {{$ijin}}  </pre>|Test Comm|<pre>  {{$test}}  </pre>|BAPS|<pre>  {{$baps}}  </pre>|<pre> </pre>|

@endcomponent
Thanks,<br>
@endcomponent
