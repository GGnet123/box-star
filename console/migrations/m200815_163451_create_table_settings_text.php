<?php

use yii\db\Migration;

/**
 * Class m200815_163451_create_table_settings_text
 */
class m200815_163451_create_table_settings_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings_text', [
            'id' => $this->primaryKey(),
            'call_us_number' => $this->string(),
            'about_us' => $this->text(),
            'one_tick_header' => $this->string(),
            'one_tick_content' => $this->text(),
            'two_tick_header' => $this->string(),
            'two_tick_content' => $this->text(),
            'three_tick_header' => $this->string(),
            'three_tick_content' => $this->text(),
            'four_tick_header' => $this->string(),
            'four_tick_content' => $this->text(),
            'five_tick_header' => $this->string(),
            'five_tick_content' => $this->text(),
            'six_tick_header' => $this->string(),
            'six_tick_content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings_text');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200815_163451_create_table_settings_text cannot be reverted.\n";

        return false;
    }
    */
}
