<?php
/**
 * The Package_Version class.
 *
 * @package automattic/jetpack-transport-helper
 */

namespace Automattic\Jetpack\Transport_Helper;

/**
 * The Package_Version class.
 *
 * Does *not* use namespaced versioning ("VXXXX") because send_package_version_to_tracker() is used as a
 * "jetpack_package_versions" filter, and said filter gets run during a plugin upgrade, so it always expects to
 * find the "Package_Version" class with the same namespace, name, and interface.
 */
class Package_Version {

	const PACKAGE_VERSION = '0.2.1';

	const PACKAGE_SLUG = 'transport-helper';

	/**
	 * Adds the package slug and version to the package version tracker's data.
	 *
	 * @param array $package_versions The package version array.
	 *
	 * @return array The package version array.
	 */
	public static function send_package_version_to_tracker( $package_versions ) {
		$package_versions[ self::PACKAGE_SLUG ] = self::PACKAGE_VERSION;

		return $package_versions;
	}
}
