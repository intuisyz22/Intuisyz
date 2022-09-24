<?php
// $data='{"qpaper_id":1,"answersArray":{"a_3":["1",1.016,1],"4":[0,0,-1],"5":[0,0,-1],"6":[0,0,-1],"7":[0,0,-1]},"seconds":3597,"getqidArray":[3,4,5,6,7],"questionDetails":[{"qid_3":["5","10","0.25"]},{"qid_4":["6","10","0.25"]}]}';
$data='{"answersArray":{"qid_3":["1",1.016,1],"qid_4":[0,0,-1],"qid_5":[0,0,-1],"qid_6":[0,0,-1],"qid_7":[0,0,-1]}}';
$data=json_decode($data);
// $v=$data->questionDetails;
$ansString="answersArray";
$q="qid_3";
print_r($data->$ansString->"3"[0]);
echo "<br>";
if(in_array("qid_3", $data)){
	echo "fond";
}else{
	echo "not found";
}
// print_r($data->answersArray->3);
 // foreach($data->questionDetails[0] as $qDetails=>$value){
       
 //        print_r($qDetails);exit;
 //    }
     
?>