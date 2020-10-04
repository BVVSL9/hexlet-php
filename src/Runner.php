<?php
/**
 * test fail
 */

namespace My\Project\Runner;

use Tightenco\Support\Collection;

function run() // text
{
	$collection = collect(['taylor', 'abigail', null])->map(function ($name) {
		            return strtoupper($name);
			        });

	        return $collection;
}

