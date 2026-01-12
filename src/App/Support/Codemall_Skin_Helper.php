<?php

declare(strict_types=1);

namespace Yivic\Codemall_Skin\App\Support;

class Codemall_Skin_Helper {
	public static function check_mandatory_prerequisites(): bool {
		return version_compare( phpversion(), '7.3.0', '>=' );
	}

	public static function check_yivic_base_plugin(): bool {
		return (bool) class_exists( \Yivic_Base\App\WP\WP_Application::class );
	}
}
