<?php

use yii\db\Migration;

class m190104_143519_visit extends Migration
{
    public function up()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		$TABLE_NAME = 'ziyaret';
		$this->createTable($TABLE_NAME, [
            'ID' => $this->primaryKey(),
            'IP' => $this->string(100)->notNull(),
            'Giris_Zamani' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }
    

    public function down()
    {
        $TABLE_NAME = 'ziyaret';
        $this->dropTable($TABLE_NAME);
    }
    
}
