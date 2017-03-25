<?php

namespace App\Repository;
class AdminRepostiry
{
    /**
     * 显示dashborad页面的数据
     * @return \Illuminate\Support\Collection
     */
    public function rdashboard()
    {
        return $collects = collect(
            [
                [
                    'count' => 44,
                    'title' => 'All Members',
                    'sup' => '人',
                    'icon' => 'ion-person-add',
                    'bck' => 'bg-aqua',
                    'url' => '/admin/usermember/index'
                ],
                [
                    'count' => 45,
                    'title' => 'All Articles',
                    'sup' => '篇',
                    'icon' => 'ion-document',
                    'bck' => 'bg-green',
                    'url' => '/admin/article/index'
                ],
                [
                    'count' => 33,
                    'title' => 'All videos',
                    'sup' => '个',
                    'icon' => 'ion-videocamera',
                    'bck' => 'bg-purple',
                    'url' => 'admin/video/index'
                ],
                [
                    'count' => 11,
                    'title' => 'All News',
                    'sup' => '个',
                    'icon' => 'ion-film-marker',
                    'bck' => 'bg-yellow',
                    'url' => 'admin/series/index'
                ],
                [
                    'count' => 33,
                    'title' => 'All Comments',
                    'sup' => '条',
                    'icon' => 'ion-document',
                    'bck' => 'bg-red',
                    'url' => 'admin/discussion/index'
                ],
                [
                    'count' => 44,
                    'title' => 'All Lists',
                    'sup' => '条',
                    'icon' => 'ion-android-textsms',
                    'bck' => 'bg-orange',
                    'url' => 'admin/comment/index'
                ],
                [
                    'count' => 43,
                    'title' => 'All Tasks',
                    'sup' => '条',
                    'icon' => 'ion-pricetags',
                    'bck' => 'bg-olive',
                    'url' => 'admin/tags/index'
                ],
                [
                    'count' => 55,
                    'title' => 'All musics',
                    'sup' => '首',
                    'icon' => 'ion-music-note',
                    'bck' => 'bg-maroon',
                    'url' => 'admin/broadcast/index'
                ]
            ]
        );
    }
}