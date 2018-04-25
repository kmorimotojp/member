<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MtMember Entity
 *
 * @property int $ID
 * @property string $FIRST_NAME
 * @property string $LAST_NAME
 * @property int $CLASS
 */
class MtMember extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'ID' => true,
        'FIRST_NAME' => true,
        'LAST_NAME' => true,
        'CLASS' => true
    ];
}
