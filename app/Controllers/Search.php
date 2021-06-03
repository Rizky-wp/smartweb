<?php

namespace App\Controllers;

use SpotifyWebAPI;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\PodcastModel;

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

        $user = $userModel->asObject()->find($this->session->id);
        #dd($user);
        $session->setAccessToken($user[0]->accToken);
        $session->setRefreshToken($user[0]->refreshToken);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);
        $api->setSession($session);
        $data_search = $api->search($search, 'show', ['limit' => 10]);
        // $me = $api->me();
        // dd($me);
        $data = [
            'name' => $this->session->name,
            'data_search' => $data_search,
        ];
        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->update($this->session->id, [
            'accToken' => $newAccessToken,
            'refreshToken' => $newRefreshToken,
        ]);
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
        $user  = $userModel->asObject()->find($this->session->id);
        $session->setAccessToken($user[0]->accToken);
        $session->setRefreshToken($user[0]->refreshToken);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);

        $page = 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;
        $data_pod = $api->getShow($search);
        $data_episode = $api->getShowEpisodes($search, [
            'offset' => $offset,
            'limit' => $limit,
        ]);

        // dd($data_episode);
        $data = [
            'name' => $this->session->name,
            'data_search' => $data_pod,
            'page' => $page,
            'data_episode' => $data_episode,
        ];
        #dd($data_pod);
        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->update($this->session->id, [
            'accToken' => $newAccessToken,
            'refreshToken' => $newRefreshToken,
        ]);
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
        $user = $userModel->asObject()->find($this->session->id);
        $session->setAccessToken($user[0]->accToken);
        $session->setRefreshToken($user[0]->refreshToken);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);

        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->update($this->session->id, [
            'accToken' => $newAccessToken,
            'refreshToken' => $newRefreshToken,
        ]);
        $data_episode = $api->getShowEpisodes($id_pod, [
            'offset' => $offset,
            'limit' => $limit,
        ]);
        echo json_encode([
            'page' => $page,
            'data' => $data_episode,
        ]);
    }
    public function episode($episode)
    {
        $page = 0;
        $episodeId = $episode;
        $userModel = new UserModel();
        $session = new SpotifyWebAPI\Session(
            $this->clientId,
            $this->clientSec,
        );
        $options = [
            'auto_refresh' => true,
        ];
        $user = $userModel->asObject()->find($this->session->id);
        // dd($user);
        $session->setAccessToken($user[0]->accToken);
        $session->setRefreshToken($user[0]->refreshToken);
        $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);

        $newAccessToken = $session->getAccessToken();
        $newRefreshToken = $session->getRefreshToken();
        $userModel->update($this->session->id, [
            'accToken' => $newAccessToken,
            'refreshToken' => $newRefreshToken,
        ]);
        $me = $api->me();
        $data_episode = $api->getEpisode($episodeId);
        $data = [
            'name' => $this->session->name,
            'data_episode' => $data_episode,
            'me' => $me,
            'page' => $page,
        ];
        return view('comment/comment', $data);
    }
    public function save()
    {
        $userModel = new UserModel();
        $commentmodel = new CommentModel();
        $podcastmodel = new PodcastModel();
        $id_user = $this->request->getVar('id_user');
        $id_pod = $this->request->getVar('id_pod');
        $id_episode = $this->request->getVar('id_episode');
        $isi = $this->request->getVar('isi');

        $podcast = $podcastmodel->find($id_pod);
        if ($isi) {
            if ($podcast) {
                $save = $commentmodel->save([
                    'id_user' => $id_user,
                    'id_pod' => $id_pod,
                    'id_episode' => $id_episode,
                    'isi' => $isi,
                ]);
                if ($save) {
                    $response = "oke";
                    echo json_encode(['data' => $response]);
                } else {
                    $response = "gagal";
                    echo json_encode(['data' => $response]);
                }
            } else {
                $session = new SpotifyWebAPI\Session(
                    $this->clientId,
                    $this->clientSec,
                );
                $options = [
                    'auto_refresh' => true,
                ];
                $user = $userModel->asObject()->find($this->session->id);
                $session->setAccessToken($user[0]->accToken);
                $session->setRefreshToken($user[0]->refreshToken);
                $api = new SpotifyWebAPI\SpotifyWebAPI($options, $session);

                $newAccessToken = $session->getAccessToken();
                $newRefreshToken = $session->getRefreshToken();
                $userModel->update($this->session->id, [
                    'accToken' => $newAccessToken,
                    'refreshToken' => $newRefreshToken,
                ]);
                $data_pod = $api->getShow($id_pod);
                $name_pod = $data_pod->name;
                $url = $data_pod->images[1]->url;
                $insert = $podcastmodel->insert([
                    'id_pod' => $id_pod,
                    'name_podcast' => $name_pod,
                    'url' => $url,
                ]);
                if ($insert) {
                    $save = $commentmodel->save([
                        'id_user' => $id_user,
                        'id_pod' => $id_pod,
                        'id_episode' => $id_episode,
                        'isi' => $isi,
                    ]);
                    if ($save) {
                        $response = "oke";
                        echo json_encode(['data' => $response]);
                    } else {
                        $response = "gagal";
                        echo json_encode(['data' => $response]);
                    }
                }
            }
        } else {
            $response = "gagal";
            echo json_encode(['data' => $response]);
        }
    }
    public function getkomen()
    {
        $commentmodel = new CommentModel();
        $page = $this->request->getVar('page');
        $id_episode = $this->request->getVar('id_episode');
        $page = $page + 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $data = $commentmodel->komen($id_episode, $offset);
        echo json_encode([
            'page' => $page,
            'data' => $data,
        ]);
    }
}
