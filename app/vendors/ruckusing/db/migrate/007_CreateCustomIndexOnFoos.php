<?php

class CreateCustomIndexOnFoos extends Ruckusing_BaseMigration {

	public function up() {
    $this->add_index('foo_bars', 'name', array('name' => 'idx_foo_custom'));
	}//up()

	public function down() {
    $this->remove_index('foo_bars', 'name', array('name' => 'idx_foo_custom'));
	}//down()
}
?>