<?php

class CreateUsersTable extends Ruckusing_BaseMigration {

	public function up() {
    $t = $this->create_table('users');
    $t->column('age', 'integer');
    $t->column('name', 'string');
    $t->finish();
	}//up()

	public function down() {
    $this->drop_table('users');
	}//down()
}
?>