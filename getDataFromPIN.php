<?php
function CallAPI($method, $url, $data)
{
    // $url = 'https://www.publicinsightnetwork.org/air2/api/public/search';
    $curl = curl_init();
    // $data = array('a' => '876b38326fd1aba40eacef55aed2c293', 'q' => 'query_uuid:5422e15635b6', 't' => 'query_uuid:5422e15635b6');
    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    // $params = array('foo' => 'foo', 'bar' => 'bar');
// $url .= '?' . http_build_query($params);

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
?>