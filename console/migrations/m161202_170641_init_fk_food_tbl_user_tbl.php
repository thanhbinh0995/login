<?php

use yii\db\Migration;

class m161202_170641_init_fk_food_tbl_user_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_food_tbl_user_tbl", 'food', 'user_id', 'user', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_food_tbl_user_tbl", "food");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
