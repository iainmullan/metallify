<?php

class CreateSubjects extends Ruckusing_BaseMigration {

	public function up() {
    $t = $this->create_table('subjects');
    $t->column('created_at', 'datetime');
    $t->finish();
	}//up()

	public function down() {
    $this->drop_table('subjects');
	}//down()
}
?>