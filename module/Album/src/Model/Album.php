<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedri
 * Date: 13/11/2018
 * Time: 19:35
 */

namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
    }
}