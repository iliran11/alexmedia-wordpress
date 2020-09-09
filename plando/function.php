<?php
function send_lead_to_plando($cf7)
{

  $submit = \WPCF7_Submission::get_instance();
  $data   = $submit->get_posted_data();

  if (!empty($data)) {
    $api_url = 'https://plando.co.il/contacts/lead_form1';
    $lead_data = [
      'access_key' => '32babd483e4697009ebb97b4bcd9832a',
      'name'      => $data['your-name'],
      'phone'     => $data['telephone'],
      'email'  => $data['email'],
      'contact[remark]'    => $data['remark'],
      'contact[customer_cat_id]' => 0, // Lead
      'contact[lead_origin_cat_id]' => 461967, // Lead origin
    ];
    $lead_data = json_encode($lead_data);
    $response = wp_remote_post($api_url, [
      'headers' => [
        'Content-Type'   => 'application/json',
        'tokenid'        => '32babd483e4697009ebb97b4bcd9832a',
      ],
      'body'    => $lead_data,
    ]);

    return (!is_wp_error($response));
  }
}
