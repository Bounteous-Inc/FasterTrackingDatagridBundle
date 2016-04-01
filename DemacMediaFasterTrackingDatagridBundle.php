<?php

namespace DemacMedia\Bundle\FasterTrackingDatagridBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DemacMediaFasterTrackingDatagridBundle extends Bundle
{
    public function getParent()
    {
        return 'OroTrackingBundle';
    }
}
