<?php 
namespace OmekaTheme\Helper;

use Laminas\View\Helper\AbstractHelper;

class DetectTracks extends AbstractHelper
{
    public function __invoke($files = null) 
    {
        foreach ($files as $file) {
            if ($file->getExtension() == "vtt") {
                return true;
            }
        }
        return false;
    }
}