<?php
        include 'getDataFromPIN.php';
        include 'Response.php';

        echo json_encode(getResponses());
        function getResponses(){
            $url = 'https://www.publicinsightnetwork.org/air2/api/public/search';
            $data = array('a' => '876b38326fd1aba40eacef55aed2c293', 'q' => 'query_uuid:5422e15635b6', 't' => 'query_uuid:5422e15635b6');
            $jsonString = CallAPI('GET', $url, $data);

        	$decoded = json_decode($jsonString, true);
            $allResponses = array();
        	$count = 0;
        	foreach ($decoded['results'] as $result) {

    		$response = new Response;

                    $response->set_src_first_name($result['src_first_name']);
                    $response->set_src_last_name($result['src_last_name']);
                    $response->set_primary_city($result['primary_city']);
                    $response->set_primary_country($result['primary_country']);
                    $response->set_primary_county($result['primary_county']);
                    $response->set_primary_lat($result['primary_lat']);
                    $response->set_primary_long($result['primary_long']);
                    $response->set_primary_state($result['primary_state']);
                    $response->set_primary_zip($result['primary_zip']);

                    $response_set = array();
                    $question_set = array();
            	    // echo "</br>";

            	    //    foreach ($result['questions'] as $key=>$value) {
            	    //    	$question_set[$key]=$value['value'];
            		// }

            	    foreach ($result['responses'] as $key=>$value) {
            	    	// $question = $question_set[$key];
            	    	$response_set[$key]=$value;
            	    	// echo $key . ' = ' . $value;
            	    	// echo "</br>";
            	       }

    		$response->set_responses($response_set);
                    $allResponses[$count] = $response;
                    $count++;
            }
            // echo json_encode($allResponses);
            return $allResponses;
        }
?>