<?php

declare(strict_types=1);

namespace muqsit\vanillagenerator\generator\biomegrid;

class Climate{

	/**
	 * @param int $value
	 * @param int[] $cross_types
	 * @param int $final_value
	 */
	public function __construct(
		public int $value,
		public array $cross_types,
		public int $final_value
	){}
}
