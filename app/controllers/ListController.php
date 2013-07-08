<?php

class ListController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function subscribeUser()
    {

        $apikey = '6e34cfe71e585e702cd74a2e167b1526-us5';
        $mc_api = new \Mailchimp\MCAPI($apikey);
        $list_id = '6843d47bc4'; //Coming  Soon Subscribers
        $email = Input::get('email');

        $data = [];

        if ($list_id) {
            $return_data = $mc_api->listSubscribe($list_id, $email, $data, $email_type = 'html');

        }

//        return "got here"
        return ($return_data) ? View::make('landing')->with('success_email', $email) : View::make('landing')->with('error_msg', "Couldn't subscribe you at this time, please try again");

    }


    public function subscribeFeedback()
    {

        $data = [
            'username' => Input::get('uname'),
            'userEmail' => Input::get('email'),
            'content' => Input::get('message')
        ];

        $sendEmail = Mail::send('emails.feedback', $data, function ($message) use ($data) {

            $message
                ->to('happy@geleyi.com', 'Feedback')
                ->cc(['dele@geleyi.com', 'maki@geleyi.com'])
                ->subject("Feedback from {$data['username']}");
        });

        if (!$sendEmail) return View::make('landing')->with('feedback_not_sent', 'Sorry we could not send that email, please try again');

        return View::make('landing')->with('feedback_sent', $data);
    }

}