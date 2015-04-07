<?php
namespace Jehaby\Optis;

//require 'GUI/MainFrame.php';

require '../vendor/autoload.php';

use Jehaby\Optis\GUI\MainFrame;



$mf = new mainFrame();
$mf->Show();

wxEntry();

?>