<?php

use yii\db\Migration;

/**
 * Class m220323_030501_DetalheOferta
 */
class m220323_030501_DetalheOferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#DETALHEOFERTA (ID, ANOSEMESTRE, DISCPLINA_FK, OFERTA_FK)
        $this -> createTable('DETALHEOFERTA', [
        'ID'           => $this ->primaryKey(),
        'ANOSEMESTRE'  => $this ->smallInteger(),
        'DISCIPLINA_ID' => $this ->integer(),
        'OFERTA_ID'    => $this ->integer()

        ]);
        $this ->addForeignKey('disciplina_fk', 'DETALHEOFERTA', 'DISCIPLINA_ID', 'DISCIPLINA', 'ID', 'RESTRICT');
        $this ->addForeignKey('oferta_fk', 'DETALHEOFERTA', 'OFERTA_ID', 'OFERTA', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this ->dropForeignKey('disciplina_fk', 'DETALHEOFERTA');
        $this ->dropForeignKey('oferta_fk', 'DETALHEOFERTA');
        $this -> dropTable ('DETALHEOFERTA');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220323_030501_DetalheOferta cannot be reverted.\n";

        return false;
    }
    */
}
