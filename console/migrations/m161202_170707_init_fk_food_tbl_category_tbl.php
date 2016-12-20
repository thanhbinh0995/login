<?php

use yii\db\Migration;

class m161202_170707_init_fk_food_tbl_category_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_food_tbl_category_tbl", 'food', 'category_id', 'category', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_food_tbl_category_tbl", "food");
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
