<?php

namespace Fuel\Migrations;

class Change_contact_phones
{
	public function up()
	{
		\DBUtil::drop_fields('contact_phones', 'id');
	}

	public function down()
	{
		\DBUtil::add_fields('contact_phones', array(
    		'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true))
		);
	}
}