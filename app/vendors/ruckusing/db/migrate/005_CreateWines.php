<?php

class CreateWines extends Ruckusing_BaseMigration {

	public function up() {
    $t = $this->create_table('wines', array('id' => false));
    $t->column('guid', 'string', array('primary_key' => true));
    $t->finish();
	}//up()

	public function down() {
    $this->drop_table('wines');
	}//down()
}
?>