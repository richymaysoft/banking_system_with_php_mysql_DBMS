<?php
//Notification from Admin
function sendSingle($useSubject, $app_id, $ids, $siteName){
        $content = array(
            "en" => $useSubject
            );
        $headings = array(
        "en" => $siteName
        );
        $fields = array(
            'app_id' => $app_id,
            'include_player_ids' => $ids,
            'data' => array("foo" => "bar"),
            'contents' => $content,
            'headings' => $headings
        );
        $fields = json_encode($fields);
        //print("\nJSON sent:\n");
        //print($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

//Credit/Debit Alert from Admin    
function sendAlert($siteName, $app_id, $ids, $subject){
        $content = array(
            "en" =>  $subject
            );
        $headings = array(
        "en" => $siteName
        );
        $fields = array(
            'app_id' => $app_id,
            'include_player_ids' => $ids,
            'data' => array("foo" => "bar"),
            'contents' => $content,
            'headings' => $headings
        );
        $fields = json_encode($fields);
        //print("\nJSON sent:\n");
        //print($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    
//Debit Alert User
function sendDebitAlert($subject, $app_id, $user_ids, $siteName){
        $content = array(
            "en" => $subject
            );
        $headings = array(
        "en" => $siteName
        );
        $fields = array(
            'app_id' => $app_id,
            'include_player_ids' => $user_ids,
            'data' => array("foo" => "bar"),
            'contents' => $content,
            'headings' => $headings
        );
        $fields = json_encode($fields);
        //print("\nJSON sent:\n");
        //print($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    
    
//Credit Alert User
function sendCreditAlert($subject_credit, $app_id, $rec_ids, $siteName){
        $contents = array(
            "en" => $subject_credit
            );
        $headingss = array(
        "en" => $siteName
        );
        $fieldss = array(
            'app_id' => $app_id,
            'include_player_ids' => $rec_ids,
            'data' => array("foo" => "bar"),
            'contents' => $contents,
            'headings' => $headingss
        );
        $fieldss = json_encode($fieldss);
        //print("\nJSON sent:\n");
        //print($fieldss);
        $chs = curl_init();
        curl_setopt($chs, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($chs, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($chs, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($chs, CURLOPT_HEADER, FALSE);
        curl_setopt($chs, CURLOPT_POST, TRUE);
        curl_setopt($chs, CURLOPT_POSTFIELDS, $fieldss);
        curl_setopt($chs, CURLOPT_SSL_VERIFYPEER, FALSE);
        $responses = curl_exec($chs);
        curl_close($chs);
        return $responses;
    }
    
/*
SEND TO ALL SUBSCRIBERS

function sendMessage($app_id) {
    $content      = array(
        "en" => 'English Message'
    );
    $headings = array(
        "en" => 'Title'
        );

    $fields = array(
        'app_id' => $app_id,
        'included_segments' => array(
            'Subscribed Users'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'headings' => $headings

    );
    
    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic YTAxZDgwMWYtNzA1ZS00Y2M4LTk4NjQtMDA0YzEzNmI4YWY0'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}
$response = sendMessage($app_id);

$return["allresponses"] = $response;
$return = json_encode($return);

$data = json_decode($response, true);
print_r($data);
$iid = $data['id'];
print_r($iid);

print("\n\nJSON received:\n");
print($return);
print("\n");
*/

    
