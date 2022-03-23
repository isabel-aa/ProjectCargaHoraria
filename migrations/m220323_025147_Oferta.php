<?php

use yii\db\Migration;

/**
 * Class m220323_025147_Oferta
 */
class m220323_025147_Oferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#OFERTA (ID, SEMESTRE_INICIO, MATRIZ_FK, USUARIO_FK, DATA_REGISTRO)
        $this->createTable('OFERTA', [
        'ID' => $this->primaryKey(),
        'SEMESTRE_INICIO' => $this->smallInteger(),
        'MATRIZ_ID' => $this->integer(),
        'USUARIO_ID' => $this->integer(),
        'DATA_REGISTRO' => $this->date()

        ]);
        $this->addForeignKey('matriz_fk', 'OFERTA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
        $this->addForeignKey('usuario_fk', 'OFERTA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('matriz_fk', 'OFERTA');
        $this->dropForeignKey('usuario_fk', 'OFERTA');
        $this->dropTable('OFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220323_025147_Oferta cannot be reverted.\n";

        return false;
    }
    */
}
