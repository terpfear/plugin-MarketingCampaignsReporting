<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\MarketingCampaignsReporting\Columns;

use Piwik\Columns\Dimension;
use Piwik\Piwik;

class CombinedKeywordContent extends Dimension
{
    public function getName()
    {
        return Piwik::translate('MarketingCampaignsReporting_CombinedKeywordContent');
    }
}
