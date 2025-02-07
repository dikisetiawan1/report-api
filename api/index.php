
<?php

function myDataApi(){
  
// koneksi db
include "../function/koneksi.php";

//url api
$api_url = "https://vtsapi.easygo-gps.co.id/api/report/lastpositionold";
$token = "C3639EADE6D24E1481D7BFBDAB918429";

$input_nopol= '["B 9505 feu"];';


// ambil data dari url
$curl= curl_init($api_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST,1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $input_nopol);
curl_setopt($curl, CURLOPT_HTTPHEADER, array( 
  'token: '.$token,
  'Content-Type: application/json',
));
 $response = curl_exec($curl);
 $data_api = json_decode($response, true);

 $data= $data_api['Data'];
  

  // looping data api
  foreach ($data as $row) {
      $no_pol = $row["no_pol"];
      $no_aset = $row["no_aset"];
      $msisdn = $row["msisdn"];
      $lat = $row["lat"];
      $lon = $row["lon"];
      $address = $row["address"];
      $gps_time = $row["gps_time"];
      $received_time = $row["received_time"];
      $geofence_location = $row["geofence_location"];
      $speed = $row["speed"];
      $direction = $row["direction"];
      $acc = $row["acc"];
      $odometer = $row["odometer"];
      $status_vehicle = $row["status_vehicle"];
      $report_status = $row["report_status"];
      $alarm_status = $row["alarm_status"];
      $temperature1 = $row["temperature1"];
      $temperature2 = $row["temperature2"];
      $mainpowervoltage = $row["mainpowervoltage"];
      $backupbatteryvoltage = $row["backupbatteryvoltage"];
      $sos = $row["sos"];
      $gsm_signal = $row["gsm_signal"];
      $rfid_driver = $row["rfid_driver"];
      $driver = $row["driver"];
      $start_moving = $row["start_moving"];
      $start_parking = $row["start_parking"];
      $start_idle = $row["start_idle"];
      $company_nm = $row["company_nm"];
      $can_elements = $row["can_elements"];
      $do_header = $row["do_header"];

      
      $sql = "SELECT * FROM report_unit";
      $data_query = $koneksi->query($sql);

    

      if(!empty($data_query) && $data_query -> num_rows > 0){

        $sql = "DELETE FROM report_unit";
        $koneksi->query($sql);
        if (mysqli_query($koneksi, $sql)) {
          echo "Data berhasil di hapus";
        }else{
            echo "Data gagal di hapus";
        }


      }else{

         // input data ke db myapi
       $sql = "INSERT INTO report_unit (no_pol, no_aset, msisdn, lat, lon, address, gps_time, received_time, geofence_location, speed, direction, acc, odometer, status_vehicle, report_status, alarm_status,temperature1,temperature2,mainpowervoltage,backupbatteryvoltage,sos , gsm_signal,  rfid_driver, driver, start_moving, start_parking, start_idle, company_nm, can_elements, do_header  ) VALUES ('$no_pol', '$no_aset', '$msisdn', '$lat', '$lon', '$address', '$gps_time', '$received_time', '$geofence_location', '$speed', '$direction', '$acc', '$odometer', '$status_vehicle', '$report_status', '$alarm_status','$temperature1','$temperature2','$mainpowervoltage','$backupbatteryvoltage','$sos' , '$gsm_signal',  '$rfid_driver', '$driver', '$start_moving', '$start_parking', '$start_idle', '$company_nm', '$can_elements', '$do_header' )";
    
       //logika input data
       if (mysqli_query($koneksi, $sql)) {
           echo "Data berhasil di tambahkan";
       }else{
           echo "Data gagal di tambahkan";
       }
      // update data ke db myapi, jika data sudah ada
        // $sql = "UPDATE report_unit SET no_pol = '$row[no_pol]',
        //                               no_aset = '$row[no_aset]',
        //                               msisdn = '$row[msisdn]',
        //                               lat = '$row[lat]',
        //                               lon = '$row[lon]',
        //                               address = '$row[address]',
        //                               gps_time = '$row[gps_time]',
        //                               received_time = '$row[received_time]',
        //                               geofence_location = '$row[geofence_location]',
        //                               speed = '$row[speed]',
        //                               direction = '$row[direction]',
        //                               acc = '$row[acc]',
        //                               odometer = '$row[odometer]',
        //                               status_vehicle = '$row[status_vehicle]',
        //                               report_status = '$row[report_status]',
        //                               alarm_status = '$row[alarm_status]',
        //                               temperature1 = '$row[temperature1]',
        //                               temperature2 = '$row[temperature2]',
        //                               mainpowervoltage = '$row[mainpowervoltage]',
        //                               backupbatteryvoltage = '$row[backupbatteryvoltage]',
        //                               sos = '$row[sos]',
        //                               gsm_signal = '$row[gsm_signal]',
        //                               rfid_driver = '$row[rfid_driver]',
        //                               driver = '$row[driver]',
        //                               start_moving = '$row[start_moving]',
        //                               start_parking = '$row[start_parking]',
        //                               start_idle = '$row[start_idle]',
        //                               company_nm = '$row[company_nm]',
        //                               can_elements = '$row[can_elements]',
        //                               do_header = '$row[do_header]'

        //                               WHERE no_pol='$no_pol'";

        //                                 //logika update data
        //                               if (mysqli_query($koneksi, $sql)) {
        //                                   echo "Data berhasil di update";
        //                               }else{
        //                                   echo "Data gagal di update";
        //                               }

  

  }
}
}

// panggil function
myDataApi();

?>

