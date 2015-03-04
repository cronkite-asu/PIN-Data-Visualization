<?php
        echo json_encode(getQuestions());
        function getQuestions(){
                include 'getDataFromPIN.php';
                include 'Response.php';
                $url = 'https://www.publicinsightnetwork.org/air2/api/public/search';
                $data = array('a' => '876b38326fd1aba40eacef55aed2c293', 'q' => 'query_uuid:5422e15635b6', 't' => 'query_uuid:5422e15635b6');
                $jsonString = CallAPI('GET', $url, $data);

                $decoded = json_decode($jsonString, true);
                $result = $decoded['results'][0];
                $question_set = array();
                if($result){
                    foreach ($result['questions'] as $key=>$value) {
                        $question_set[$key]=$value['value'];
                    }
                }
                // echo json_encode($question_set);
                return $question_set;
        }
?>