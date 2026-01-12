<?php

declare(strict_types=1);

namespace Yivic\Codemall_Skin\App\Support\Traits;

trait Codemall_Skin_Trans_Trait {
	protected function __( $message ) {
		// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText
		return __( $message, 'yivic-base' );
	}
}
