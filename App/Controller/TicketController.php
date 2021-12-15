<?php

use App\Request\Request;

class TicketController {
    public function __construct()
    {
    }

    public function concert() {

    }

    public function theatre() {
        $event_id = Request::get('e');
        $q = DB::table('etkinlik')
            ->where('id',$event_id)
            ->result();
        return view('theatre-detail',compact('q'));
    }

    public function rezerve() {

    }

    public function eventSeat(){
        $event_id = Request::get('e');
        $res = DB::table('tiyatro')->select('sira')->where('etkinlik',$event_id)->groupBy('sira')->result();
        $count = mysqli_num_rows($res);
        echo '[';
        /**
        foreach($res as $index => $show) {
            $sira = json_encode(array("sira" => $show["sira"]));
            echo $sira;
            echo $count == $index+1 ? '' : ',';
        }
        **/
        foreach($res as $index => $show) {
            $sira = $show["sira"];
            $new_query = DB::table('tiyatro')
                ->where('etkinlik',$event_id)
                ->whereAnd('sira',$sira)
                ->result();
            //print_r($new_query);

            $count2 = mysqli_num_rows($new_query);
            echo '{';
            echo '"sira" : "'.$sira.'",';
            echo '"data": [';
            foreach($new_query as $key => $rw) {
                     echo '{';
                     echo '"koltuk" : "'.$rw['koltuk'].'",';
                     echo '"fiyat" : "'.$rw['fiyat'].'",';
                     echo '"durum" : "'.$rw['durum'].'",';
                     echo '"user_id" : "'.$rw['user_id'].'",';
                     echo '"id" : "'.$rw['id'].'"';
                     echo '}';
                echo $key == $count2 - 1 ? '' : ',';
            }
            echo ']';
            echo '}';
            echo $index == $count - 1 ? '' : ',';
        }

        echo ']';
    }

    public function seatRow() {
        $event = Request::get('e');
        $seat = Request::get('sira');
        $query = DB::table('tiyatro')->where('etkinlik',$event)->whereAnd('sira',$seat)->result();
        $key = 1;
        $count = mysqli_num_rows($query);
        echo '[';
        foreach($query as $rw) {
            $seat = [
                "koltuk" => $rw['koltuk'],
                "fiyat" => $rw['fiyat'],
                "durum" => $rw['durum'],
                "user_id" => $rw['user_id'],
                "id" => $rw['id']

            ];
            echo json_encode($seat);
            echo $count == $key ? '' : ',';
            $key++;
        }

        echo ']';

    }

    public function checkTicket(){
        $sid = Request::get('seatID');
        $user = SESSION_ID;
        $check = DB::table('tiyatro')->where('id',$sid)->object();
        if(($check->durum == 1) and ($check->user_id < 1)) {
            $data = [
              "user_id" => $user
            ];
            $up = DB::table('tiyatro')->update('id',$check->id,$data);
            echo $up == 1 ? 1 : 0;
        }else if(($check->durum == 1) and ($check->user_id == $user)){
            $data = [
                "user_id" => 0
            ];
            $up = DB::table('tiyatro')->update('id',$check->id,$data);
            echo $up == 1 ? 3 : 0;
        }else if(($check->durum == 1) and ($check->user_id > 0)) {
            echo 2;
        }else if(($check->durum == 0) and ($check->user_id > 0)) {
            echo 4;
        }

    }

    public function getPrice(){
        $eventID = Request::get('e');
        $userID = SESSION_ID;
        $check = DB::table('tiyatro')->where('etkinlik',$eventID)->whereAnd('user_id',$userID)->result();
        $count = mysqli_num_rows($check);
        echo "[";
        foreach($check as $index => $rw){

            $array = array(
                "sira" => $rw["sira"],
                "koltuk" => $rw["koltuk"],
                "fiyat" => $rw["fiyat"]
            );
            echo json_encode($array);
            echo $index+1 == $count ? "" : ",";

        }
        echo "]";
    }

    public function selectCity(){
        $city = Request::get('city');
        $_SESSION["city"] = $city;
        echo $city ? 1 : 0;
    }
}


/***
 * Response Code
 *
 * "0" - Error
 * "1" - Access / Rezerved
 * "2" - Already rezerved
 * "3" - Reserved canceled
 * "4" - Purchased
 *
 */