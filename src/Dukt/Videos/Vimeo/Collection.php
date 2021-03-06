<?php

namespace Dukt\Videos\Vimeo;

use Dukt\Videos\Common\AbstractCollection;

class Collection extends AbstractCollection
{
    public function instantiateAlbum($response)
    {
        $this->id = $response->id;
        $this->url = $response->url[0];
        $this->title = $response->title;
        $this->totalVideos = $response->total_videos;
    }

    public function instantiateChannel($response)
    {
        $this->id = $response->id;
        $this->url = $response->url[0];
        $this->title = $response->name;
        $this->totalVideos = $response->total_videos;
    }
}
