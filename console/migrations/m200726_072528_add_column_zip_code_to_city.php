<?php

use yii\db\Migration;

/**
 * Class m200726_072528_add_column_zip_code_to_city
 */
class m200726_072528_add_column_zip_code_to_city extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cities', 'zip_code', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('cities', 'zip_code');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200726_072528_add_column_zip_code_to_city cannot be reverted.\n";

        return false;
    }
    */
}
