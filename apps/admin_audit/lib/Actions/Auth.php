<?php
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
 *
 * @author Joas Schilling <coding@schilljs.com>
 * @author Lukas Reschke <lukas@statuscode.ch>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\AdminAudit\Actions;

/**
 * Class Auth logs all auth related actions
 *
 * @package OCA\AdminAudit\Actions
 */
class Auth extends Action {
	public function loginAttempt(array $params) {
		$this->log(
			'Login attempt: "%s"',
			$params,
			[
				'uid',
			],
			true
		);
	}

	public function loginSuccessful(array $params) {
		$this->log(
			'Login successful: "%s"',
			$params,
			[
				'uid',
			],
			true
		);
	}

	public function logout(array $params) {
		$this->log(
			'Logout occurred',
			[],
			[]
		);
	}
}
