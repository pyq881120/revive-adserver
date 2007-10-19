<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

require_once MAX_PATH . '/lib/OA/Dashboard/Graph.php';
require_once MAX_PATH . '/lib/OA/Admin/Statistics/Factory.php';

/**
 * A dashboard widget to diplay an RSS feed of the Openads Blog
 *
 */
class OA_Dashboard_Widget_GraphOAP extends OA_Dashboard_Widget_Graph
{
    function OA_Dashboard_Widget_GraphOAP($aParams)
    {
        parent::OA_Dashboard_Widget_Graph($aParams);

        $this->oTpl->setCacheLifetime(new Date_Span('0-3-0-0'));

        $this->oTpl->clear_all_cache();

        if ($this->isDataRequired()) {
            $this->setData($this->getStats());
        }
    }

    function getStats()
    {
        $oEnd = new Date();
        $oEnd->setHour(0);
        $oEnd->setMinute(0);
        $oEnd->setSecond(0);

        $oStart = new Date($oEnd);
        $oStart->subtractSpan(new Date_Span('7-0-0-0'));

        $doDsah = OA_Dal::factoryDO('data_summary_ad_hourly');
        $doDsah->selectAdd();
        $doDsah->selectAdd('day');
        $doDsah->selectAdd('SUM(impressions) AS total_impressions');
        $doDsah->selectAdd('SUM(clicks) AS total_clicks');
        $doDsah->whereAdd("day >= '".$doDsah->escape($oStart->format('%Y-%m-%d'))."'");
        $doDsah->whereAdd("day < '".$doDsah->escape($oEnd->format('%Y-%m-%d'))."'");
        $doDsah->groupBy('day');
        $doDsah->orderBy('day');

        $doDsah->find();

        $aStats = array();
        while ($doDsah->fetch()) {
            $row = $doDsah->toArray();
            $aStats[0][date('D', strtotime($row['day']))] = $row['total_impressions'];
            $aStats[1][date('D', strtotime($row['day']))] = $row['total_clicks'];
        }

        return $aStats;
    }
}

?>