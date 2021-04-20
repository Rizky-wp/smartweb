<?php


namespace App\Controllers;



use SpotifyWebAPI;
use App\Models\UserModel;


class Spotify extends BaseController
{


    private $clientId = "d1abeb7409464d2c8997aa5ae020237d";
    private $clientSec = "cd94ee10c1354f14bc1e80b6c1bb1177";
    private $redirectUri = "http://localhost:8081/spotify/callback";
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
            $this->aksesToken();
        }
    }
    public function aksesToken()
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

        $accessToken = $sessionSpotify->getAccessToken();
        $refreshToken = $sessionSpotify->getRefreshToken();
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        // Fetch the saved access token from somewhere. A session for example.
        $api->setAccessToken($accessToken);
        $me = $api->me();
        $name = $me->display_name;
        $name1 = $userModel->where('name', $name)
            ->findAll();

        if ($name1) {
            $userModel->where('name', $name)
                ->set([
                    'accToken' => $accessToken,
                    'refreshToken' => $refreshToken,
                ])
                ->update();
            $_SESSION['name'] = $name;
        } else {
            $userModel->save([
                'name' => $name,
                'accToken' => $accessToken,
                'refreshToken' => $refreshToken,
            ]);

            $_SESSION['name'] = $name;
        }




        header('Location: ' . base_url('dashboard'));
        die();
    }
    public function logout()
    {
        $userModel = new UserModel();
        $userModel->where('name', $_SESSION['name'])
            ->set([
                'accToken' => null,
                'refreshToken' => null,
            ])
            ->update();

        $this->session->destroy();
        return redirect()->to('/home');
    }
}
