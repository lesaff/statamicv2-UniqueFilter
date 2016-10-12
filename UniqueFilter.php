<?php

namespace Statamic\Addons\Unique;

use Statamic\Extend\Filter;

class UniqueFilter extends Filter
{
    /**
     * Perform filtering on a collection
     *
     * @return \Illuminate\Support\Collection
     */
    public function filter()
    {

		return $this->collection->unique(function ($entry) {

			$uid = $this->get('uid', 'unique_id');

            return $entry->get($uid);

        });

    }
}
