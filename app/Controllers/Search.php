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

        $user = $userModel->where('name', $this->session->name)
            ->first();
        #dd($user);
        $session->setAccessToken($user['accToken']);
        $session->setRefreshToken($user['refreshToken']);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);
        $api->setSession($session);
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
        $user = $user = $userModel->where('name', $this->session->name)
            ->first();
        $session->setAccessToken($user['accToken']);
        $session->setRefreshToken($user['refreshToken']);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);
        $api->setSession($session);

        $page = 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;
        $data_pod = $api->getShow($search);
        $data_episode = $api->getShowEpisodes($search, [
            'offset' => $offset,
            'limit' => $limit,
        ]);

        #dd($data_pod);
        $data = [
            'name' => $this->session->name,
            'data_search' => $data_pod,
            'page' => $page,
            'data_episode' => $data_episode,
        ];
        #dd($data_pod);
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
    public function get()
    {
        $userModel = new UserModel();
        $page = $this->request->getVar('page');
        $id_pod = $this->request->getVar('id_pod');
        $page = $page + 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $session = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
        );

        $options = [
            'auto_refresh' => true,
        ];
        $user = $user = $userModel->where('name', $this->session->name)
            ->first();
        $session->setAccessToken($user['accToken']);
        $session->setRefreshToken($user['refreshToken']);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);
        $api->setSession($session);
        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->where('name', $this->session->name)
            ->set([
                'accToken' => $newAccessToken,
                'refreshToken' => $newRefreshToken,
            ])
            ->update();
        $data_episode = $api->getShowEpisodes($id_pod, [
            'offset' => $offset,
            'limit' => $limit,
        ]);
        echo json_encode([
            'page' => $page,
            'data' => $data_episode,
        ]);
    }
}
