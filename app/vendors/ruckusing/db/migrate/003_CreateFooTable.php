<?php

class CreateFooTable extends Ruckusing_BaseMigration {

	public function up() {
    $t = $this->create_table('foobar');
    $t->column('name', 'string');
    $t->finish();
	}//up()

	public function down() {
    $this->drop_table('foobar');
	}//down()
}
?>