<?php


namespace App\Controllers;

use SpotifyWebAPI;
use App\Models\UserModel;


class Login extends BaseController
{



    protected $session;


    function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();
    }


    public function index()
    {
        // unset($_SESSION['name']);
        // $this->aksesToken();

        if (isset($this->session->name)) {

            return redirect()->to('/dashboard');
        }
        // echo $_SESSION['name'];
        else {

            return $this->login();
        }
    }
    public function login()
    {
        return view('login/login');
    }
    public function spotify()
    {
        $this->aksesToken();
    }
    protected function aksesToken()
    {


        $sessionSpotify = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
            $this->redirectUri
        );

        $state = $sessionSpotify->generateState();

        $options = [
            'scope' => [
                'playlist-read-private',
                'user-read-private',
            ],
            'state' => $state,
        ];



        header('Location: ' . $sessionSpotify->getAuthorizeUrl($options));
        die();
    }
    public function callback()
    {
        $userModel = new UserModel();
        $sessionSpotify = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
            $this->redirectUri
        );
        $state = $_GET['state'];

        // Fetch the stored state value from somewhere. A session for example

        // if ($state !== $storedState) {
        //     // The state returned isn't the same as the one we've stored, we shouldn't continue
        //     die('State mismatch');
        // }

        // Request a access token using the code from Spotify
        $sessionSpotify->requestAccessToken($_GET['code']);
        $options = [
            'auto_refresh' => true,
        ];
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $sessionSpotify);
        $accessToken = $sessionSpotify->getAccessToken();
        $refreshToken = $sessionSpotify->getRefreshToken();
        // Fetch the saved access token from somewhere. A session for example.
        $api->setAccessToken($accessToken);
        $me = $api->me();
        $id = $me->id;
        $id1 = $userModel->find($id);
        if ($id1) {
            $userModel->update($id, [
                'name' => $me->display_name,
                'accToken' => $accessToken,
                'refreshToken' => $refreshToken,
            ]);

            $_SESSION['name'] = $me->display_name;
            header('Location: ' . base_url('dashboard'));
            die();
        } else {
            $userModel->insert([
                'id'    => $id,
                'name' => $me->display_name,
                'accToken' => $accessToken,
                'refreshToken' => $refreshToken,
            ]);
            $_SESSION['id'] = $me->id;
            $_SESSION['name'] = $me->display_name;
            header('Location: ' . base_url('dashboard'));
            die();
        }
    }
    public function logout()
    {
        // $userModel = new UserModel();
        // $userModel->where('name', $_SESSION['name'])
        //     ->set([
        //         'accToken' => null,
        //         'refreshToken' => null,
        //     ])
        //     ->update();

        $this->session->destroy();
        return redirect()->to('/login');
    }
}
