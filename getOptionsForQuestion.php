<?php
        $quuid = $_GET["quuid"];
        // echo $quuid;
        $uuid = $_GET["uuid"];
        // echo $uuid;
        if($quuid){
            echo json_encode(getEncodedQuestionCount($uuid, $quuid));
            // getEncodedQuestionCount($uuid, $quuid);
        }
        function getEncodedQuestionCount($uuid, $quuid){
                include 'getDataFromPIN.php';
                include 'Response.php';
                $url = 'https://www.publicinsightnetwork.org/air2/q/'.$uuid.'.json';
                // echo $url;
                $data = array('a' => '876b38326fd1aba40eacef55aed2c293');
                $jsonString = CallAPI('GET', $url, $data);

                $decoded = json_decode($jsonString, true);
                // echo var_dump($decoded);
                $questions = $decoded['questions'];
                $option_set = array();
                $count = 0;
                if($questions){
                    foreach ($questions as $ques) {
                        if($ques['ques_uuid'] == $quuid){
                            $options = $ques['ques_choices'];
                            // echo $ques['ques_choices'];
                            if($options){
                                foreach ($options as $choice) {   
                                    $option_set[$count] = $choice['value'];
                                    $count++;
                                }
                            }
                        }
                    }
                }
                // echo json_encode($option_set);
                return $option_set;
        }
?>