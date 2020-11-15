<?php
/**
 * Room4testFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RoomFixture', 'Rooms.Test/Fixture');
App::uses('Space', 'Rooms.Model');

/**
 * Room4testFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Rooms\Test\Fixture
 */
class Room4testFixture extends RoomFixture {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'Room';

/**
 * Full Table Name
 *
 * @var string
 */
	public $table = 'rooms';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		//サイト全体
		array(
			'id' => '1',
			'space_id' => '1',
			'page_id_top' => null,
			'parent_id' => null,
			'lft' => '1',
			'rght' => '18',
			'active' => '1',
			'default_role_key' => 'visitor',
			'need_approval' => '1',
			'default_participation' => '1',
			'page_layout_permitted' => '0',
			'theme' => null,
		),
		//パブリックスペース
		array(
			'id' => '2',
			'space_id' => '2',
			'page_id_top' => '1',
			//'root_id' => null,
			'parent_id' => '1',
			'lft' => '2',
			'rght' => '9',
			'active' => true,
			'default_role_key' => 'visitor',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
		//パブリックスペース、別ルーム(room_id=4)
		array(
			'id' => '5',
			'space_id' => '2',
			'page_id_top' => '3',
			//'root_id' => '2',
			'parent_id' => '2',
			'lft' => '3',
			'rght' => '6',
			'active' => true,
			'default_role_key' => 'visitor',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
		//パブリックスペース、サブサブルーム(room_id=8)
		array(
			'id' => '9',
			'space_id' => '2',
			'page_id_top' => '8',
			//'root_id' => '2',
			'parent_id' => '5',
			'lft' => '4',
			'rght' => '5',
			'active' => true,
			'default_role_key' => 'visitor',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
		//パブリックスペース、別ルーム(room_id=5、ブロックなし)
		array(
			'id' => '6',
			'space_id' => '2',
			'page_id_top' => '4',
			//'root_id' => '2',
			'parent_id' => '2',
			'lft' => '7',
			'rght' => '8',
			'active' => true,
			'default_role_key' => 'visitor',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
		//プライベートスペース
		array(
			'id' => '3',
			'space_id' => '3',
			'page_id_top' => null,
			//'root_id' => null,
			'parent_id' => '1',
			'lft' => '10',
			'rght' => '13',
			'active' => true,
			'default_role_key' => 'room_administrator',
			'need_approval' => false,
			'default_participation' => false,
			'page_layout_permitted' => false,
			'theme' => null,
		),
		//プライベートスペース、別ルーム(room_id=7, プライベートルーム)
		array(
			'id' => '8',
			'space_id' => '3',
			'page_id_top' => '7',
			//'root_id' => '3',
			'parent_id' => '3',
			'lft' => '11',
			'rght' => '12',
			'active' => true,
			'default_role_key' => 'room_administrator',
			'need_approval' => '0',
			'default_participation' => '0',
			'page_layout_permitted' => '0',
			'theme' => null,
		),
		//コミュニティスペース
		array(
			'id' => '4',
			'space_id' => '4',
			'page_id_top' => null,
			//'root_id' => null,
			'parent_id' => '1',
			'lft' => '14',
			'rght' => '17',
			'active' => true,
			'default_role_key' => 'general_user',
			'need_approval' => true,
			'default_participation' => true,
			'page_layout_permitted' => true,
			'theme' => null,
		),
		//コミュニティスペース、別ルーム(room_id=6, 準備中)
		array(
			'id' => '7',
			'space_id' => '4',
			'page_id_top' => '5',
			//'root_id' => '4',
			'parent_id' => '4',
			'lft' => '15',
			'rght' => '16',
			'active' => '0',
			'default_role_key' => 'general_user',
			'need_approval' => true,
			'default_participation' => false,
			'page_layout_permitted' => true,
			'theme' => null,
		),

		// プライベート
		[
			'id' => 10,
			'space_id' => Space::PRIVATE_SPACE_ID,
			'page_id_top' => '10',
			'active' => '1',
			'in_draft' => '0',
		],
		[
			'id' => 11,
			'space_id' => Space::COMMUNITY_SPACE_ID,
			'page_id_top' => '11',
			'active' => '1',
			'in_draft' => '0',
		],
		[
			'id' => 12,
			'space_id' => Space::COMMUNITY_SPACE_ID,
			'page_id_top' => '12',
			'active' => '1',
			'in_draft' => '0',
		],

		// @see ReservationAppModelTest
		[
			'id' => 40,
			'space_id' => Space::COMMUNITY_SPACE_ID,
			'page_id_top' => '4',
			'active' => '1',
			'in_draft' => '0',
		],
		[
			'id' => 41,
			'space_id' => Space::COMMUNITY_SPACE_ID,
			'page_id_top' => '4',
			'active' => '1',
			'in_draft' => '0',
		],
		[
			'id' => 42,
			'space_id' => Space::PRIVATE_SPACE_ID,
			'page_id_top' => '10',
			'active' => '1',
			'in_draft' => '0',
		],
	);

}
