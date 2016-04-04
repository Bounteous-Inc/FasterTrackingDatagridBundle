<?php

namespace DemacMedia\Bundle\FasterTrackingDatagridBundle\EventListener\Datagrid;

use Oro\Bundle\DataGridBundle\Event\BuildAfter;

class TrackingDatagridAfterListener
{
    /**
     * @param BuildAfter $event
     */
    public function buildAfter(BuildAfter $event)
    {
        $fieldsToCustomize = [
            'res',
            'urlref',
        ];

        foreach($fieldsToCustomize as $field) {
            $event->getDatagrid()->getConfig()->offsetSetByPath(
                '[filters][columns][' .$field. '][options][operator_choices]', [
                    'is equal to',
                    'is empty',
                    'is not empty',
                    'is any of',
                    'is not any of'
                ]
            );
        }
    }
}
