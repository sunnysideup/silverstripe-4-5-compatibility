<?php

namespace Sunnysideup\Silverstripe4To5Compatibility\Extensions;

use SilverStripe\Core\Extension;

// set SS_MAJOR_VERSION_IS_4 to 4 in .env file.

/**
 * for SS4.0
 *
 * @property DataListExtension $owner
 */
class DataListExtension extends Extension
{
    public function orderBy($sortString)
    {
        return $this->owner->sort($sortString);
    }
}
