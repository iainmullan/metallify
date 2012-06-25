<?php

class AddIndexesToUsers extends Ruckusing_BaseMigration {

	public function up() {
    $this->add_index('users', 'age');
	}//up()

	public function down() {
    $this->remove_index('users', 'age');
	}//down()
}
?>