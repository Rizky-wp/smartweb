<?php

namespace App\Controllers;

use SpotifyWebAPI;
use App\Models\UserModel;

class Search extends BaseController
{
    protected $session;

    function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        $userModel = new UserModel();
        $search = $this->request->getVar('search');
        $session = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
        );

        $options = [
            'auto_refresh' => true,
        ];

        $user = $userModel->find($this->session->name);
        $session->setAccessToken($user['accToken']);
        $session->setRefreshToken($user['refreshToken']);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);
        $data_search = $api->search($search, 'show', ['limit' => 10]);

        #dd($data_search);
        $data = [
            'name' => $this->session->name,
            'data_search' => $data_search,
        ];
        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->where('name', $this->session->name)
            ->set([
                'accToken' => $newAccessToken,
                'refreshToken' => $newRefreshToken,
            ])
            ->update();
        return view('search/search', $data);
    }
    public function search($pod_id)
    {
        $userModel = new UserModel();
        $search = $pod_id;
        $session = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
        );

        $options = [
            'auto_refresh' => true,
        ];
        $user = $userModel->find($this->session->name);
        $session->setAccessToken($user['accToken']);
        $session->setRefreshToken($user['refreshToken']);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);

        $data_pod = $api->getShow($search);
        #dd($data_pod);
        $data = [
            'name' => $this->session->name,
            'data_search' => $data_pod,
        ];
        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->where('name', $this->session->name)
            ->set([
                'accToken' => $newAccessToken,
                'refreshToken' => $newRefreshToken,
            ])
            ->update();
        return view('search/episode', $data);
    }
}
