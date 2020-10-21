<?php
interface VideoServiceinterface
{
    public function getEMBED();
}

class Youtube implements VideoServiceinterface
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getEMBED()
    {
        return '<iframe>'.$this->url.'</iframe>';
    }
}

class Vimeo implements VideoServiceinterface
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getEMBED()
    {
        return '<video>'.$this->url.'</video>';
    }
}

class Wistia implements VideoServiceinterface
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getEMBED()
    {
        return '<coisa>'.$this->url.'</coisa>';
    }

    public function getHmtl()
    {
        return '<coisa>'.$this->url.'</coisa>';
    }
}

class Xyz implements VideoServiceinterface
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getEMBED()
    {
        return '<xyz>'.$this->url.'</xyz>';
    }
}

class Aula
{
    private $video;

    public function __construct(VideoServiceinterface $video)
    {
        $this->video = $video;
    }

    public function getVideoHtml()
    {
        return $this->video->getEMBED();
    }

    /*public function __construct($video_type, $url)
    {
        switch ($video_type){
            case 'Youtube': $video = new Youtube($url); break;
            case 'Vimeo': $video = new Vimeo($url); break;
        }
    }*/
}

$video = new Wistia('123');
$aula = new Aula($video);

echo "HMTL: ". $aula->getVideoHtml();
