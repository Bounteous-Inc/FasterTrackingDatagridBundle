<?php

namespace DemacMedia\Bundle\FasterTrackingDatagridBundle\EventListener\Datagrid;

use Oro\Bundle\DataGridBundle\Event\BuildBefore;

class TrackingDatagridListener
{
    /**
     * @param BuildBefore $event
     */
    public function buildBefore(BuildBefore $event)
    {
        if ('website-tracking-events-grid' !== $event->getConfig()->getName()) {
            return;
        }

        $fieldsToCustomize = [
            'name',
            'value',
            'userIdentifier',
            'code'
        ];

        foreach($fieldsToCustomize as $field) {
            $event->getDatagrid()->getConfig()->offsetSetByPath(
                '[filters][columns][' .$field. '][options][operator_choices]', [
                    'is equal to',
                    'is empty',
                    'is not empty',
                    'is any Of',
                    'is not any of'
                ]
            );
        }

    }
}
