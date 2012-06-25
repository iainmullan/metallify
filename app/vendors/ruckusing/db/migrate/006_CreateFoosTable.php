<?php

class CreateFoosTable extends Ruckusing_BaseMigration {

	public function up() {
    $t = $this->create_table('foo_bars');
    $t->column('name', 'string');
    $t->finish();
	}//up()

	public function down() {
    $this->drop_table('foo_bars');
	}//down()
}
?>